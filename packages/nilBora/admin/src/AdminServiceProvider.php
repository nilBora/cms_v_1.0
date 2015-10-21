<?php

namespace NilBora\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->views();
         $this->routes();
         $this->controllers();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    private function routes()
    {
        require __DIR__ . '/Http/routes.php';
    }
    private function controllers()
    {
        require __DIR__ . '/Http/Controllers/AdminController.php';
        require __DIR__ . '/Http/Controllers/AuthController.php';
    }
    
    private function views()
    {
       	$this->loadViewsFrom(__DIR__.'/resources/auth', 'auth');
       	$this->loadViewsFrom(__DIR__.'/resources/views', 'views');
    }
    
    private function style()
    {
	   /*
 this->publishes([
		    __DIR__.'/path/to/assets' => public_path('vendor/courier'),
		], 'public');
*/
    }
}