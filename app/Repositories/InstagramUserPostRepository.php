<?php
namespace App\Repositories;

use Illuminate\Foundation\Application;

class InstagramUserPostRepository
{
    protected $app;

    protected $model;

    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->makeModel();
    }

    public function makeModel()
    {
        $model = $this->app->make('App\Models\InstagramUserPost');

        return $this->model = $model;
    }

    public function updateOrCreate($array, $input)
    {
        return $this->model->updateOrCreate($array, $input);
    }
}