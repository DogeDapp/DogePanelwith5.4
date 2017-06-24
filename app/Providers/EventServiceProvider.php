<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'App\Events\UserCheckIn'      => [
			'App\Listeners\UserCheckInCoins',
		],
		'App\Events\UserGetsInvite'   => [
			'App\Listeners\InitiateUser',
		],
		'App\Events\CreateNewService' => [
			'App\Listeners\SetUpService',
		],
		'App\Events\RedeemCode' => [
			'App\Listeners\DistributeGift'
		],
		'App\Events\UserHasNotEnoughCoins' => [
		],

		// System Provided
		 'Illuminate\Notifications\Events\NotificationSent' => [
        'App\Listeners\LogNotification',
    ],
	];

	protected $subscribe = [
		'App\Listeners\Subscriber\TopUpEventSubscriber',
		'App\Listeners\Subscriber\ItemsEventSubscriber',
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		//
	}
}
