<?php
namespace App\Repositories;

use Illuminate\Foundation\Application;

class InquiryRepository extends BaseRepository
{
    protected $model;

    /**
     * InquiryRepository constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
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

    /**
     * @param string $first_name
     * @param string $last_name
     * @return string
     */
    public function getFullName($first_name, $last_name)
    {
        return $first_name . ' ' . $last_name;
    }
}