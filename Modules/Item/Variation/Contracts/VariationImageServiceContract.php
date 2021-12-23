<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Services\ExportPreloadValue\ExportPreloadValue;

/**
 * Preload all variations linked to an image for several item IDs
 */
interface VariationImageServiceContract 
{

	public function preload(
		array $values
	):array;

	public function getData(
		int $itemId, 
		int $imageId = null
	);

	public function resetPreLoadedData(
	);

	public function getAll(
	):array;

}