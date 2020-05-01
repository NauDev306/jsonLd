<?php

namespace NauDev\JsonLd\Providers;

use Illuminate\Support\ServiceProvider;

class JsonLdServiceProvider extends ServiceProvider
{
	/**
	 * The Default context
	 * @var string
	 */
	const DEFAULT_CONTEXT = "https://schema.org";

	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot()
	{
	  $this->registerPublishing();  
	}

	/**
	 * Register any package services
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR_.'/../../config/jsonld.php', 'jsonld'
		);
	}

	/**
	 * Register any publishing path
	 * 
	 * @return void
	 */
	private function registerPublishing()
	{
		$this->publishes([
			_DIR_.'/../../config/jsonld.php' => config_path('jsonld.php')
		], 'jsonld-config');

		$this->publishes([
			_DIR_.'/../../stubs/JsonLdServiceProvider.stub' => app_path('Providers/JsonLdServiceProvider.php')
		], 'jsonld-provider');
	}

}