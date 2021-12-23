<?php
namespace Plenty\Modules\Helper\Contracts;


/**
 * Repository Contract for retrieving image and item URLs
 */
interface UrlBuilderRepositoryContract 
{

	const SIZE_MIDDLE = 'middle';

	const SIZE_PREVIEW = 'preview';

	const SIZE_SECOND_PREVIEW = 'secondPreview';

	const SIZE_NORMAL = 'normal';

	/**
	 * Get the URL of an image.
	 */
	public function getImageUrl(
		string $path, 
		int $plentyId = null, 
		string $size = "", 
		string $fileType = "", 
		bool $isExternalImage = false
	):string;

	/**
	 * Get the URL of an item.
	 */
	public function getItemUrl(
		int $itemId, 
		int $plentyId, 
		string $urlContent = "", 
		string $lang = "de", 
		bool $useHttpsDomain = true
	):string;

}