<?php
namespace App\Repositories;

use Illuminate\Foundation\Application;

class InquiryRepository
{
    protected $app;

    protected $model;

    //TODO create base class
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
        $model = $this->app->make('App\Models\Inquiry');

        return $this->model = $model;
    }

    /**
     * @param $input
     * @return mixed
     */
    public function create($input)
    {
        return $this->model->create($input);
    }
}