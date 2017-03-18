<?php

namespace YourSchool\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Html::macro('openField', function ($field = null, $errors = null, $attributes = null){

            $class = isset($attributes['class']) ? $attributes['class'].' ' : "";
            $error = isset($field) && isset($errors) && $errors->has($field) ? " error" : "";

            return "<div class=\"{$class}field{$error}\">";
        });

        \Html::macro('errorField', function ($field, $errors){
            return view('errors.error_field', compact('field', 'errors'));
        });

        \Html::macro('closeDiv', function (){
            return "</div>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
