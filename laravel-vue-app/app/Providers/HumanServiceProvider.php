<?php

namespace App\Providers;

use Validator;

use App\Http\Validators\HumanValidator;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HumanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new HumanValidator($translator, $data, $rules, $messages);
        });
    }
}
