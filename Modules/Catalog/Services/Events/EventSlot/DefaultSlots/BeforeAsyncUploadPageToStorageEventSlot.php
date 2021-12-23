<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot\DefaultSlots;

use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * Before async upload's page to storage event slot
 */
abstract class BeforeAsyncUploadPageToStorageEventSlot implements EventSlotContract

{

	const KEY = 'before_async_upload_page_to_storage';

	const DATA_KEY_PAGE = 'page';

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