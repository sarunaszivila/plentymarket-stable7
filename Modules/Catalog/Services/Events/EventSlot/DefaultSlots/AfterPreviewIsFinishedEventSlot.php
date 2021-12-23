<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot\DefaultSlots;

use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * After preview is finish event slot
 */
abstract class AfterPreviewIsFinishedEventSlot implements EventSlotContract

{

	const KEY = 'after_preview_is_finished';

	const DATA_KEY_RESULT = 'result';

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