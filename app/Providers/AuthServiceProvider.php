<?php

namespace App\Providers;

 use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::before(function ($user){
            if($user->isAdmin == 1)
            return true;
        });

        foreach(Role::all() as $role){
            Gate::define($role->name, function ($user) use ($role){
                return $user->isRole($role);
            });
        }
    }
}
