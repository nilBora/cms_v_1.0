<?php

namespace NilBora\Todo;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
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
         $this->publishes([
		    __DIR__.'/assets/js' => public_path('build/js'),
		], 'public');
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
        require __DIR__ . '/Http/Controllers/TodoController.php';
    }
    
    private function views()
    {
       	$this->loadViewsFrom(__DIR__.'/resources/views', 'todo');
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