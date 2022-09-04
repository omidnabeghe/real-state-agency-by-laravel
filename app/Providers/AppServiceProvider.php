<?php

namespace App\Providers;

use App\Models\Ads;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;


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

        view()->composer('home', function ($view) {
            if (Ads::count() > 0){
                $areas = Ads::where('area','>=', 0)->pluck('area')->toArray();
                if(!empty($areas)){
                    $sumArea = 0;
                    foreach($areas as $area){
                        $sumArea += $area;
                    }
                }
   
                $view->with('sumArea',$sumArea);
            }else{
                $view->with('sumArea','');

            }
        });
        view()->composer('home', function ($view) {
            if (Post::count() > 0){

            $view->with('posts',Post::count());
            }else{
                $view->with('posts','');

            }
        });

        Builder::macro('whereLike', function ($attributes, $searchTerm) {
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach (Arr::wrap($attributes) as $attribute) {
                    $query->orWhere($attribute, 'LIKE', "%$searchTerm%");
                }
            });

            return $this;
        });


    }
}
