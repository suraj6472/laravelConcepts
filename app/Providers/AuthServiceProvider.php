<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('post_create', function(User $user, Post $post) {
        //     return $user->id == $post->user_id;
        // });

        // Gate::define('post_delete', function(User $user, Post $post) {
        //     return $user->id == $post->user_id;
        // });

        // Gate::define('post_edit', function(User $user, Post $post) {
        //     return $user->id == $post->user_id;
        // });
    }
}
