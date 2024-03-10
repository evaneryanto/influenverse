<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Portfolio;
use App\Models\Influencer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Ramsey\Uuid\Type\Integer;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('check_influencer', function (User $user) {
            return $user->role == 'influencer' || $user->role == 'admin';
        });

        Gate::define('influencer_authorization', function (User $user, Influencer $influencer) {
            return $user->id == $influencer->user_id;
        });

        Gate::define('check_brand', function (User $user) {
            return $user->role == 'brand' || $user->role == 'admin';
        });

    }
}
