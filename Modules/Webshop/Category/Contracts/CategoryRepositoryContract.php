<?php
namespace Plenty\Modules\Webshop\Category\Contracts;

use Plenty\Modules\Category\Models\Category;

/**
 * Get category data for plentyShop.
 */
interface CategoryRepositoryContract 
{

	/**
	 * Return one category by id.
	 */
	public function get(
		int $categoryId, 
		string $language = null, 
		int $webstoreId = null, 
		array $additionalFilter = [], 
		bool $toObject = true
	);

	/**
	 * Retrieve the url for a category by id.
	 */
	public function getUrl(
		int $categoryId, 
		string $language = null, 
		int $webstoreId = null, 
		array $additionalFilter = []
	):string;

}