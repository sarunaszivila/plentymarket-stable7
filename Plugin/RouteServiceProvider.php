<?php
namespace Plenty\Plugin;

use Plenty\Modules\Plugin\Services\PluginRouteCacheService;
use Plenty\Providers\RouteServiceProvider as PlentyRouteServiceProvider;

/**
 * Route service provider
 */
abstract class RouteServiceProvider 
{

	public function getApplication(
	):Application
	{
		return null;
	}

	public function getEventDispatcher(
	):Events\Dispatcher
	{
		return null;
	}

}