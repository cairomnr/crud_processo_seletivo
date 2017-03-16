<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use App\Validator\EmailValidator as EmailValidator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(150);

        Validator::extend('rn_email', function($attribute, $value, $parameters, $validator) {
            $values = [];

            /* Primeiro explode para validar se existe elementos antes do arroba e elementos quaisquer depois dele */
            $explode_arroba_email = explode("@", $value, 2);

            if($explode_arroba_email[0] == "" || !array_key_exists(1, $explode_arroba_email))
            return false;

            /* Segundo explode para validar se existe elementos do primeiro ponto do arroba e elementos quaisquer depois dele */
            $explode_first_dot_email = explode('.', $explode_arroba_email[1], 2);

            if($explode_first_dot_email[0] == "" || !array_key_exists(1, $explode_first_dot_email))
            return false;

            if(strlen($explode_first_dot_email[1]) < 2)
            return false;

            return true;
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
