<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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


        view()->composer('*', function($view){

            $category = DB::table('categories')->select('id','categoryname')->get();

            $decod = json_decode($category,true);
        
            for($i = 0; $i < count($decod); $i++){
                    $id = $decod[$i]['id'];
    
                    $sub_category = DB::table('sub_categories')->where('categoryid',$id)
                    ->select('id','sub_categoryname','image')
                    ->get();
    
                    $decod[$i]['subcat'] = $sub_category;
            }
        
                $cat = $decod ;

            //You can create more views like this below for more
            $view->with('category',$decod);
        });
    }
}
