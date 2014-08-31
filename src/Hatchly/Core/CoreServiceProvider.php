<?php namespace Hatchly\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->register('Laracasts\Commander\CommanderServiceProvider');

        $this->app->singleton('Hatchly\Core\Authentication\AuthPackageInterface', 'Hatchly\Core\Authentication\Sentinel');
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

}
