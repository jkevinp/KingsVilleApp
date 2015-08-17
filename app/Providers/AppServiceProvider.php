<?php namespace KingsVilleApp\Providers;

use Illuminate\Support\ServiceProvider;

use KingsVilleApp\Repositories\Eloquent\EloquentHomeOwnerRepository;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract;


use KingsVilleApp\Repositories\Eloquent\EloquentUserRepository;
use KingsVilleApp\Repositories\Contracts\UserContract;

use KingsVilleApp\Repositories\Eloquent\EloquentMailRepository;
use KingsVilleApp\Repositories\Contracts\MailContract;

use KingsVilleApp\Repositories\Eloquent\EloquentReservationRepository;
use KingsVilleApp\Repositories\Contracts\ReservationContract;


use KingsVilleApp\Repositories\Eloquent\EloquentReservableRepository;
use KingsVilleApp\Repositories\Contracts\ReservableContract;


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
	
		$this->app->bind('KingsVilleApp\Repositories\Contracts\ContentsContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentContentsRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\UserContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentUserRepository');
		
		$this->app->bind('KingsVilleApp\Repositories\Contracts\TransactionContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentTransactionRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\MailContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentMailRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\FeeContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentFeeRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\ReservationContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentReservationRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\ReservableContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentReservableRepository');

		$this->app->bind('KingsVilleApp\Repositories\Contracts\MeterContract',
						 'KingsVilleApp\Repositories\Eloquent\EloquentMeterRepository');
	}

}
