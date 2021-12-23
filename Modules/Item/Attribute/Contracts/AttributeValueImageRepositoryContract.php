<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\Attribute\Models\AttributeValueImage;
use Plenty\Modules\Item\Attribute\Models\AttributeValueName;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute value image repository
 */
interface AttributeValueImageRepositoryContract 
{

	/**
	 * Get an attribute value image link
	 */
	public function getAttributeValueImage(
		int $itemId, 
		int $imageId, 
		int $valueId
	):AttributeValueImage;

	/**
	 * Create an attribute value image link
	 */
	public function create(
		array $data
	):AttributeValueImage;

	/**
	 * Delete an attribute value image link
	 */
	public function delete(
		int $itemId, 
		int $imageId, 
		int $valueId
	):DeleteResponse;

	/**
	 * Updates an attribute value image link
	 */
	public function update(
		array $data, 
		int $itemId, 
		int $imageId, 
		int $valueId
	):AttributeValueImage;

	/**
	 * List attribute value image links
	 */
	public function search(
	):Collection;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}