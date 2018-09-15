<?php

namespace App\Http\Controllers;

use App\Repositories\InstagramUserPostRepository;
use App\Repositories\InstagramUserRepository;
use Illuminate\Routing\Controller as BaseController;

class HobbyController extends BaseController
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

    public function getInstagramPosts()
    {

    }
}
