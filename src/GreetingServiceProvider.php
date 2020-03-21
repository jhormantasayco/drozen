<?php

namespace Jhormantasayco\Drozen;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Jhormantasayco\Drozen\Http\Controllers\GreetingController;
use Jhormantasayco\Drozen\Commands\Greeting as GreetingCommand;
use Jhormantasayco\Drozen\Greeting;

class GreetingServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        /** Verifica la ejecución de comandos en la consola */

        if ($this->app->runningInConsole()) {

            $this->commands([
                GreetingCommand::class,
            ]);
        }

        /** Carga una path de vistas y le da un alias */

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'greeting');

        /** Publica las vistas en el proyecto Laravel */

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/greeting')
        ], 'views');

        /** Publica las archivos de configuración en el proyecto Laravel */

        $this->publishes([
            __DIR__.'/../config/greeting.php' => base_path('config/greeting.php')
        ], 'config');

        /** Publica las migraciones en el proyecto Laravel */

        if (! class_exists('CreateGreetingsTable')) {

            $this->publishes([
                __DIR__.'/../database/migrations/create_greetings_table.stub.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_greetings_table.php')
            ], 'migrations');
        }


        /** Ruta del proyecto */

        Route::get(config('greeting.route'), GreetingController::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        $this->app->bind('greeting', function () {

            return new Greeting();
        });

        /** Carga un archivo de configuración y le da un key */

        $this->mergeConfigFrom(__DIR__.'/../config/greeting.php', 'greeting');
    }

}
