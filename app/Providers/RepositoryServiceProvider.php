<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();
    }

    public function register()
    {
        $this->app->bind('InstagramUserRepository', \App\Repositories\InstagramUserRepository::class);
        $this->app->bind('InstagramUserPostRepository', \App\Repositories\InstagramUserPostRepository::class);
    }
}
