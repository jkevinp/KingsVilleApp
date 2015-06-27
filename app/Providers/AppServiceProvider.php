<?php namespace KingsVilleApp\Providers;

use Illuminate\Support\ServiceProvider;

use KingsVilleApp\Repositories\Eloquent\EloquentHomeOwnerRepository;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract;


use KingsVilleApp\Repositories\Eloquent\EloquentUserRepository;
use KingsVilleApp\Repositories\Contracts\UserContract;
class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'KingsVilleApp\Services\Registrar'
		);
		$this->app->bind('KingsVilleApp\Repositories\Contracts\HomeOwnerContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentHomeOwnerRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\ContentsContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentContentsRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\UserContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentUserRepository');
	}

}
