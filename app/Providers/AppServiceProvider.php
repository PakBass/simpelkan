<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PostModel;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('isAdmin', function($user) {
        return $user->role == 'admin';});

        Gate::define('isPemeriksa', function($user) {
        return $user->role == 'pemeriksa';});

        Gate::define('isPemohon', function($user) {
        return $user->role == 'pemohon';});

        Gate::define('isAdminOrPemohon', function ($user) {
            return $user->isAdmin() || $user->isPemohon();
        });

        Paginator::useBootstrap();
    }
}
