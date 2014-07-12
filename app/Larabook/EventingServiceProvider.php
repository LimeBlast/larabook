<?php namespace Larabook;

use Illuminate\Support\ServiceProvider;

class EventingServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$listeners = $this->app['config']->get('larabook.listeners');

		foreach ($listeners as $listener) {
			$this->app['events']->listen('Larabook.*', $listener);
		}
	}
}