<?php

namespace Tests\Unit;

use App\Models\InstagramUser;
use App\Repositories\InstagramUserRepository;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstagramUserRepositoryTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function testItCanMakeModel()
    {
        $this->assertEquals(new InstagramUser(), $this->makeInstance()->makeModel());
    }

    public function testItCanCreate()
    {
        factory('App\Models\InstagramUser')->create();

        $user_id            = 2;
        $user_name          = 'name2';
        $profile_image_url  = 'https://bbb';

        $input = [
            'user_id'           => $user_id,
            'user_name'         => $user_name,
            'profile_image_url' => $profile_image_url
        ];

        $created_instagram_user = $this->makeInstance()->updateOrCreate(['user_id' => $user_id], $input);

        $this->assertEquals($created_instagram_user->user_id, $user_id);
        $this->assertEquals($created_instagram_user->user_name, $user_name);
        $this->assertEquals($created_instagram_user->profile_image_url, $profile_image_url);
    }

    public function testItCanUpdate()
    {
        $user_id            = 2;
        $user_name          = 'name3';
        $profile_image_url  = 'https://ccc';

        $input = [
            'user_id'           => $user_id,
            'user_name'         => $user_name,
            'profile_image_url' => $profile_image_url
        ];

        $created_instagram_user = $this->makeInstance()->updateOrCreate(['user_id' => $user_id], $input);

        $this->assertEquals($created_instagram_user->user_id, $user_id);
        $this->assertEquals($created_instagram_user->user_name, $user_name);
        $this->assertEquals($created_instagram_user->profile_image_url, $profile_image_url);
    }

    public function testItCanFind()
    {
        $id                 = 4;
        $user_id            = 4;
        $user_name          = 'name4';
        $profile_image_url  = 'https://ddd';

        factory('App\Models\InstagramUser')->create([
            'id'                   => $id,
            'user_id'              => $user_id,
            'user_name'            => $user_name,
            'profile_image_url'    => $profile_image_url
        ]);

        $instagram_user = $this->makeInstance()->find($id);

        $this->assertEquals($instagram_user->id, $id);
        $this->assertEquals($instagram_user->user_id, $user_id);
        $this->assertEquals($instagram_user->user_name, $user_name);
        $this->assertEquals($instagram_user->profile_image_url, $profile_image_url);
    }


    public function testItCanFindByUserId()
    {
        $user_id            = 5;
        $user_name          = 'name5';
        $profile_image_url  = 'https://eee';

        factory('App\Models\InstagramUser')->create([
            'user_id'              => $user_id,
            'user_name'            => $user_name,
            'profile_image_url'    => $profile_image_url
        ]);

        $instagram_user = $this->makeInstance()->findByUserId($user_id);

        $this->assertEquals($instagram_user->user_id, $user_id);
        $this->assertEquals($instagram_user->user_name, $user_name);
        $this->assertEquals($instagram_user->profile_image_url, $profile_image_url);
    }

    /**
     * @return InstagramUserRepository
     */
    private function makeInstance()
    {
        $app = new Application();
        return new InstagramUserRepository($app);
    }
}
