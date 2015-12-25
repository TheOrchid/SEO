<?php namespace Orchid\Access\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Resources/views' => base_path('resources/views/vendor/seo'),
            __DIR__ . '/../Models/SEO.php' => app_path('/Models/SEO.php'),
            __DIR__ . '/../Database/Migrations/' => database_path('migrations'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('seo', function () {
            return new \App\Models\SEO();
        });

        $this->app->alias('seo', 'App\Models\SEO');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['seo'];
    }

    /**
     * Register Views.
     *
     * @return void
     */
    protected function registerViews()
    {
        $this->publishes([
            __DIR__ . '/../Resources/views' => base_path('resources/views/vendor/seo')
        ]);
    }

    /**
     * Register Models.
     *
     * @return void
     */
    protected function registerModels()
    {
        $this->publishes([
            __DIR__ . '/../Models/SEO.php' => app_path('/Models/SEO.php'),
        ]);
    }

    /**
     * Register Database.
     *
     * @return void
     */
    protected function registerDatabase()
    {
        $this->publishes([
            __DIR__ . '/../Database/Migrations/' => database_path('migrations'),
        ], 'migrations');
    }

}
