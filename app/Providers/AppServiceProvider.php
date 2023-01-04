<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

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
        Model::preventLazyLoading(!app()->isProduction());

        $this->bootEloquentMorpsRelations();
    }

    public function bootEloquentMorpsRelations()
    {
        Relation::morphMap([
            Post::TABLE    => Post::class,
            Comment::TABLE => comment::class,
            User::TABLE    => User::class,
            Tag::TABLE     => Tag::class,
        ]);
    }
}
