<?php
namespace Plenty\Plugin\Events;

use Event;
use Illuminate\Support\Str;
use Plenty\Modules\Basket\Events\Basket\AfterBasketChanged;
use Plenty\Modules\Basket\Models\BasketItem;
use Plenty\Modules\Frontend\Events\FrontendCustomerAddressChanged;
use Plenty\Modules\Frontend\Session\Events\AfterSessionCreate;
use Plenty\Modules\Webshop\Events\AfterBasketItemToOrderItem;
use Plenty\Modules\Webshop\Events\BeforeBasketItemToOrderItem;
use Plenty\Modules\Webshop\Events\ValidateVatNumber;
use Plenty\Plugin\PluginApiGate;

/**
 * Dispatcher
 */
abstract class Dispatcher 
{

	abstract public function isPublicEvent(
		string $event
	):bool;

	/**
	 * Register an event listener with the dispatcher.
	 */
	abstract public function listen(
		 $event, 
		 $listener, 
		int $priority = 0
	);

	/**
	 * Determine if a given event has listeners.
	 */
	abstract public function hasListeners(
		 $event
	):bool;

	/**
	 * Fire an event and call the listeners.
	 */
	abstract public function fire(
		 $event, 
		array $payload = []
	);

	/**
	 * Fire an event and call the listeners.
	 */
	abstract public function dispatch(
		 $event, 
		array $payload = []
	);

	/**
	 * Remove a set of listeners from the dispatcher.
	 */
	abstract public function forget(
		 $event
	);

	abstract public static function getPrefix(
	):string;

}