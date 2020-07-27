<?php

namespace App\Domain\Infrastructure\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    ];

    /**
     * Register any authentication / authorization services.
     * @return void
     */
    public function boot() : void
    {
        $this->registerPolicies();
    }

    /**
     * @return void
     */
    public function register() : void
    {
    }
}
