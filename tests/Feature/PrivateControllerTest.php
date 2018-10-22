<?php

namespace Tests\Feature;

use App\Models\InstagramUser;
use App\Models\InstagramUserPost;
use App\Repositories\InstagramUserPostRepository;
use App\Repositories\InstagramUserRepository;
use Tests\TestCase;

class PrivateControllerTest extends TestCase
{
    protected $repository;

    public function testItCanGetInstagramPosts()
    {
        $instagramUser = new InstagramUser(
            [
                'id'                => 1,
                'user_id'           => 1,
                'user_name'         => 'icchy',
                'profile_image_url' => 'https://aaa'
            ]
        );

        $instagramUserPost1 = new InstagramUserPost(
            [
                'id'                => 1,
                'instagram_user_id' => 1,
                'post_id'           => 1,
                'text'              => 'aaa',
                'post_url'          => 'https://aaa',
                'post_image_url'    => 'https://aaa',
                'like_count'        => 10,
                'posted_at'         => '2018-10-10 10:10:10',
                'deleted_at'        => NULL,
                'created_at'        => '2018-10-10 10:10:10',
                'updated_at'        => '2018-10-10 10:10:10',
            ]
        );

        $instagramUserPost2 = new InstagramUserPost(
            [
                'id'                => 2,
                'instagram_user_id' => 1,
                'post_id'           => 1,
                'text'              => 'aaa',
                'post_url'          => 'https://aaa',
                'post_image_url'    => 'https://aaa',
                'like_count'        => 10,
                'posted_at'         => '2018-10-10 10:10:10',
                'deleted_at'        => NULL,
                'created_at'        => '2018-10-10 10:10:10',
                'updated_at'        => '2018-10-10 10:10:10',
            ]
        );

        $instagramUserPosts = [$instagramUserPost1, $instagramUserPost2];

        $instagramUserRepositoryMock        = \Mockery::mock(InstagramUserRepository::class);
        $instagramUserPostRepositoryMock    = \Mockery::mock(InstagramUserPostRepository::class);

        $instagramUserRepositoryMock->shouldReceive('find')->once()->with(1)->andReturn($instagramUser);
        $instagramUserPostRepositoryMock->shouldReceive('findRecentPostsByUserId')->once()->with($instagramUser->id)->andReturn($instagramUserPosts);

        $this->instance(InstagramUserRepository::class, $instagramUserRepositoryMock);
        $this->instance(InstagramUserPostRepository::class, $instagramUserPostRepositoryMock);

        $response = $this->json('GET', '/get-instagram-images');

        $response->assertStatus(200);
        $this->assertJsonStringEqualsJsonString(
            $response->getContent(),
            json_encode($instagramUserPosts)
        );
    }

    public function testItCannotGetInstagramPosts()
    {
        $response = $this->json('GET', '/get-instagram-image');

        $response->assertStatus(404);
    }
}
