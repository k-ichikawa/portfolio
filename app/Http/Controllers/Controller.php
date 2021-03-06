<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showIndex()
    {
        return view('app');
    }

    public function showAbout()
    {
        return view('app');
    }

    public function showHistory()
    {
        return view('app');
    }

    public function showPrivate()
    {
        return view('app');
    }

    public function showContact()
    {
        return view('app');
    }
}
