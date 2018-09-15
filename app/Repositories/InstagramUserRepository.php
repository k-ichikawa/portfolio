<?php
namespace App\Repositories;

use Illuminate\Foundation\Application;

class InstagramUserRepository
{
    protected $app;

    protected $model;

    //TODO create base class
    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->makeModel();
    }

    public function makeModel()
    {
        $model = $this->app->make('App\Models\InstagramUser');

        return $this->model = $model;
    }

    public function updateOrCreate($array, $input)
    {
        return $this->model->updateOrCreate($array, $input);
    }

    public function findByUserId($user_id)
    {
        return $this->model->where('user_id', $user_id)->first();
    }
}