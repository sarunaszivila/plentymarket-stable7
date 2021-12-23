<?php
namespace Plenty\Modules\Market\Ebay\Category\Contracts;

use Plenty\Modules\Market\Ebay\Category\Models\Category;

/**
 * The contract for the Ebay category repository.
 */
interface CategoryRepositoryContract 
{

	/**
	 * Get category
	 */
	public function get(
		int $id, 
		array $filters = [], 
		array $with = []
	):Category;

	/**
	 * List all categories
	 */
	public function all(
		array $filters = [], 
		array $with = []
	):array;

}