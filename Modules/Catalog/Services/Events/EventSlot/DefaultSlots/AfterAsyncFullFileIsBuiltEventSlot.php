<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot\DefaultSlots;

use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * After async full file is built event slot
 */
abstract class AfterAsyncFullFileIsBuiltEventSlot implements EventSlotContract

{

	const KEY = 'after_async_full_file_is_built';

	const DATA_KEY_FILE = 'file';

	abstract public function getKey(
	):string;

	/**
	 * Add hook to event slot
	 */
	abstract public function add(
		Hook $hook, 
		string $template
	):EventSlot;

}