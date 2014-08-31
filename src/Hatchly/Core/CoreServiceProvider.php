<?php namespace Hatchly\Core;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CoreServiceProvider extends ServiceProvider {

    /**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Add the themes directory
        $this->app['view']->addLocation(app_path('themes'));

		$this->registerBindings();
        $this->registerAliases();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

    public function boot()
    {
        include __DIR__.'/../../routes.php';
    }

    private function registerBindings()
    {
        $app = $this->app;

        $app->bind('themeHelper', function()
        {
           return new \Hatchly\Core\Theme\Helper;
        });
    }

    private function registerAliases()
    {
        $instance = AliasLoader::getInstance();

        $instance->alias('Theme', 'Hatchly\Core\Theme\HelperFacade');

    }

}
