<?php

namespace Tests\Unit;

use App\Models\InstagramUserPost;
use App\Repositories\InstagramUserPostRepository;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstagramUserPostRepositoryTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function testItCanMakeModel()
    {
        $this->assertEquals(new InstagramUserPost(), $this->makeInstance()->makeModel());
    }

    public function testItCanFindRecentPostsByUserId()
    {
        $instagram_user = factory('App\Models\InstagramUser')->create();
        factory('App\Models\InstagramUserPost', 30)->create();

        $instagram_users = $this->makeInstance()->findRecentPostsByUserId($instagram_user->id);

        $this->assertEquals($instagram_users->count(), 20);
        $this->assertEquals($instagram_users[0]->instagram_user_id, $instagram_user->id);
    }

    public function testItCanUpdate()
    {
        $instagram_user = factory('App\Models\InstagramUser')->create([]);
        factory('App\Models\InstagramUserPost')->create([
            'post_url' => 'https://aaaa'
        ]);

        $now = date("Y-m-d H:i:s");

        $post_id           = 1;
        $text              = 'updated_text';
        $post_url          = 'https://aaaa';
        $post_image_url    = 'https://updated_post_image_url';
        $like_count        = 10;
        $posted_at         = $now;

        $input = [
            'instagram_user_id' => $instagram_user->id,
            'post_id'           => $post_id,
            'text'              => $text,
            'post_url'          => $post_url,
            'post_image_url'    => $post_image_url,
            'like_count'        => $like_count,
            'posted_at'         => $posted_at
        ];

        $updated_instagram_user_post = $this->makeInstance()->updateOrCreate(['post_url' => $post_url], $input);

        $this->assertEquals($updated_instagram_user_post->post_id, $post_id);
        $this->assertEquals($updated_instagram_user_post->text, $text);
        $this->assertEquals($updated_instagram_user_post->post_url, $post_url);
        $this->assertEquals($updated_instagram_user_post->post_image_url, $post_image_url);
        $this->assertEquals($updated_instagram_user_post->like_count, $like_count);
        $this->assertEquals($updated_instagram_user_post->posted_at, $posted_at);
    }

    public function testItCanCreate()
    {
        $instagram_user = factory('App\Models\InstagramUser')->create([]);
        factory('App\Models\InstagramUserPost')->create([
            'post_url' => 'https://aaaa'
        ]);

        $now = date("Y-m-d H:i:s");

        $post_id           = 10;
        $text              = 'created_text';
        $post_url          = 'https://bbbb';
        $post_image_url    = 'https://created_post_image_url';
        $like_count        = 20;
        $posted_at         = $now;

        $input = [
            'instagram_user_id' => $instagram_user->id,
            'post_id'           => $post_id,
            'text'              => $text,
            'post_url'          => $post_url,
            'post_image_url'    => $post_image_url,
            'like_count'        => $like_count,
            'posted_at'         => $posted_at
        ];

        $updated_instagram_user_post = $this->makeInstance()->updateOrCreate(['post_url' => $post_url], $input);

        $this->assertEquals($updated_instagram_user_post->post_id, $post_id);
        $this->assertEquals($updated_instagram_user_post->text, $text);
        $this->assertEquals($updated_instagram_user_post->post_url, $post_url);
        $this->assertEquals($updated_instagram_user_post->post_image_url, $post_image_url);
        $this->assertEquals($updated_instagram_user_post->like_count, $like_count);
        $this->assertEquals($updated_instagram_user_post->posted_at, $posted_at);
    }

    /**
     * @return InstagramUserPostRepository
     */
    private function makeInstance()
    {
        $app = new Application();
        return new InstagramUserPostRepository($app);
    }
}
