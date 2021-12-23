<?php
namespace Plenty\Modules\Catalog\Services\Events\Events;

use Exception;
use Illuminate\Container\Container;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Catalog\Helpers\Throwables\CatalogThrowables;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;
use Throwable;

/**
 * Events container
 */
abstract class Events 
{

	/**
	 * Registers event slots into the event container
	 */
	abstract public function add(
		EventSlot $eventSlot
	):Events;

	/**
	 * Register hook to a specific slot
	 */
	abstract public function addHookToSlot(
		Hook $hook, 
		string $slotKey
	):Events;

	/**
	 * Instantiates the Events class
	 */
	abstract public static function instance(
	):Events;

}