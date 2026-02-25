<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ToDo;
use App\Models\User;
use App\Models\diary;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('interact-todo', function (User $user, ToDo $todo) {
            return $user->id === $todo->user_id;
     });

         Gate::define('interact-diary', function (User $user, diary $diary) {
            return $user->id === $diary->user_id;
     });
    }
}
