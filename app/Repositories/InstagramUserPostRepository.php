<?php
namespace App\Repositories;

use Illuminate\Foundation\Application;

class InstagramUserPostRepository
{
    protected $app;

    protected $model;

    /**
     * InstagramUserPostRepository constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->makeModel();
    }

    /**
     * @return mixed
     */
    public function makeModel()
    {
        $model = $this->app->make('App\Models\InstagramUserPost');

        return $this->model = $model;
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function findRecentPostsByUserId($user_id)
    {
        return $this->model->where('instagram_user_id', $user_id)->orderBy('posted_at', 'desc')->limit(20)->get();
    }

    /**
     * @param $array
     * @param $input
     * @return mixed
     */
    public function updateOrCreate($array, $input)
    {
        return $this->model->updateOrCreate($array, $input);
    }
}