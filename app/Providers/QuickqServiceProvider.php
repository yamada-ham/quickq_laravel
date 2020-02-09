<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validatiion\Validator;
use App\Http\Validators\QuickqValidator;

class QuickqServiceProvider extends ServiceProvider
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
      $validator = $this ->app['validator'];
      $validator->resolver(function($translator,$data,$rules,$messages){
      return new QuickqValidator($translator,$data,$rules,$messages);
      });
    }
}
