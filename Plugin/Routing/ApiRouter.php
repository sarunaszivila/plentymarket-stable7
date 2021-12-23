<?php
namespace Plenty\Plugin\Routing;

use Illuminate\Support\Str;
use Plenty\Plugin\Routing\Exceptions\RouteReservedException;
use Plenty\Plugin\Routing\Route as PluginRoute;
use Route as BaseRoute;

/**
 * Api router service
 */
abstract class ApiRouter 
{

	abstract public function version(
		array $version, 
		 $second, 
		 $third = null
	);

	/**
	 * Register a new GET route with the router.
	 */
	abstract public function get(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new POST route with the router.
	 */
	abstract public function post(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new PUT route with the router.
	 */
	abstract public function put(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new PATCH route with the router.
	 */
	abstract public function patch(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new DELETE route with the router.
	 */
	abstract public function delete(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new OPTIONS route with the router.
	 */
	abstract public function options(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Register a new route responding to all verbs.
	 */
	abstract public function any(
		string $uri, 
		 $action
	):PluginRoute;

	/**
	 * Route a resource to a controller.
	 */
	abstract public function resource(
		string $name, 
		string $controller, 
		array $options = []
	);

	/**
	 * Register a new route with the given verbs.
	 */
	abstract public function match(
		array $methods, 
		string $uri, 
		 $action
	):PluginRoute;

}