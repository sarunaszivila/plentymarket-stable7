<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot\DefaultSlots;

use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * After every row from export result event slot
 */
abstract class AfterEveryRowExportResultEventSlot implements EventSlotContract

{

	const KEY = 'after_every_row_export_result';

	const DATA_KEY_ORIGINAL = 'original';

	const DATA_KEY_MUTATED = 'mutated';

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