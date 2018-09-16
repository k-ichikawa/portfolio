<?php

namespace App\Http\Controllers;

use App\Repositories\InstagramUserPostRepository;
use App\Repositories\InstagramUserRepository;
use Illuminate\Routing\Controller as BaseController;

class PrivateController extends BaseController
{
    /** @var InstagramUserRepository  */
    protected $instagramUserRepository;

    /** @var InstagramUserPostRepository  */
    protected $instagramUserPostRepository;

    public function __construct(
        InstagramUserRepository $instagramUserRepository,
        InstagramUserPostRepository $instagramUserPostRepository
    ){
        $this->instagramUserRepository     = $instagramUserRepository;
        $this->instagramUserPostRepository = $instagramUserPostRepository;
    }

    /**
     * @return false|string
     */
    public function getInstagramPosts()
    {
        $instagram_user = $this->instagramUserRepository->find(1);

        $instagram_user_posts = $this->instagramUserPostRepository->findRecentPostsByUserId($instagram_user->id);

        return json_encode($instagram_user_posts);
    }
}
