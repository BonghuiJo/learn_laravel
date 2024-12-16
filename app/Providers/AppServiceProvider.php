<?php

namespace App\Providers;

use App\Service\Message;
use Illuminate\Support\ServiceProvider;
use LearningClass;
use Pest\ArchPresets\Custom;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register(): void
	{
		//return 값이 같은  Facade동작 (singleton 확인) 후 MessageClass()동작
		$this->app->singleton('learn', function ($app) {
			return new Message();
		});
	}


	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{
		//
	}
}
