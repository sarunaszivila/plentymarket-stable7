<?php
namespace Plenty\Modules\Catalog\Contracts\Events;

use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * The EventSlotContract is the inferface of EventSlot.
 */
interface EventSlotContract 
{

	/**
	 * Add hook to event slot
	 */
	public function add(
		Hook $hook, 
		string $template
	):EventSlot;

}