<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Webshop\Helpers\UrlQuery;

/**
 * Generate url for items, variations and categories considering all affecting configurations.
 */
interface UrlBuilderRepositoryContract 
{

	/**
	 * Build item url. Generate and write url to item data if not defined yet.
	 */
	public function buildItemUrl(
		int $itemId, 
		string $lang = null
	):UrlQuery;

	/**
	 * Build category url by recursively prepending url names of parent categories.
	 */
	public function buildCategoryUrl(
		int $categoryId, 
		string $lang = null, 
		int $webstoreId = null
	):UrlQuery;

	/**
	 * Store item data of loaded items to be reused when generating item or variation urls.
	 */
	public function fillItemUrl(
		array $itemData
	);

	/**
	 * Build variation url. Variation urls equal to item urls with the variation id appended.
	 */
	public function buildVariationUrl(
		int $itemId, 
		int $variationId, 
		string $lang = null
	):UrlQuery;

	/**
	 * Get the suffix to be appended to item or variation urls.
	 */
	public function getSuffix(
		int $itemId, 
		int $variationId, 
		bool $withVariationId = true
	):string;

}