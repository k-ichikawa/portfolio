<?php

namespace App\Console\Commands;

use App\Repositories\InstagramUserPostRepository;
use App\Repositories\InstagramUserRepository;
use Illuminate\Console\Command;

class crawlInstagramPostInfo extends Command
{
    protected $signature    = 'crawl_instagram_post_info';
    protected $description  = 'crawl instagram post info';

    /** @var InstagramUserRepository  */
    protected $instagramUserRepository;

    /** @var InstagramUserPostRepository  */
    protected $instagramUserPostRepository;

    /**
     * crawlInstagramPostInfo constructor.
     * @param InstagramUserRepository $instagramUserRepository
     * @param InstagramUserPostRepository $instagramUserPostRepository
     */
    public function __construct(
        InstagramUserRepository $instagramUserRepository,
        InstagramUserPostRepository $instagramUserPostRepository
    ) {
        parent::__construct();
        $this->instagramUserRepository      = $instagramUserRepository;
        $this->instagramUserPostRepository  = $instagramUserPostRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $access_token   = env('INSTAGRAM_ACCESS_TOKEN');
        $url            = 'https://api.instagram.com/v1/users/self/media/recent?access_token=' . $access_token;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($ch);
        curl_close($ch);

        $json = mb_convert_encoding($res, 'UTF-8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $posts = json_decode($json, true);

        $user_id            = $posts['data'][0]['user']['id'];
        $user_name          = $posts['data'][0]['user']['username'];
        $profile_image_url  = $posts['data'][0]['user']['profile_picture'];

        $input = [
            'user_id'           => $user_id,
            'user_name'         => $user_name,
            'profile_image_url' => $profile_image_url
        ];

        $this->instagramUserRepository->updateOrCreate(['user_id' => $user_id], $input);

        $instagram_user = $this->instagramUserRepository->findByUserId($user_id);


        foreach ($posts['data'] as $post) {
            $input = [
                'instagram_user_id' => $instagram_user->id,
                'post_id'           => $post['caption']['id'],
                'text'              => $post['caption']['text'],
                'post_url'          => $post['link'],
                'post_image_url'    => $post['images']['standard_resolution']['url'],
                'like_count'        => $post['likes']['count'],
                'posted_at'         => date("Y-m-d h:i:s", $post['created_time']),
                'updated_at'        => date("now")
            ];

            $this->instagramUserPostRepository->updateOrCreate(['post_url' => $post['link']], $input);
        }
    }
}
