<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Legacy\Models\Item\ItemImageSettings;
use Plenty\Modules\Item\ItemImage\Models\ItemImageInvalidateStatus;

/**
 * Get, update or invalidate item image settings
 */
interface ItemImageSettingsRepositoryContract 
{

	public function get(
	):ItemImageSettings;

	public function update(
		 $data
	):ItemImageSettings;

	public function invalidate(
		string $path
	):ItemImageSettings;

	public function invalidateStatus(
	);

}