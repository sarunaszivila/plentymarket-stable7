<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeValueMap;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute value map repository
 */
interface AttributeValueMapRepositoryContract 
{

	/**
	 * Creates a new attribute value map.
	 */
	public function create(
		array $data
	):AttributeValueMap;

	/**
	 * Gets an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.
	 */
	public function find(
		int $attributeId, 
		int $attributeValueId, 
		float $marketId
	):AttributeValueMap;

	/**
	 * Lists all attribute value maps.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $filter = [], 
		array $with = []
	):array;

	/**
	 * Updates an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.
	 */
	public function update(
		array $data, 
		int $attributeId, 
		int $attributeValueId, 
		float $marketId
	):AttributeValueMap;

	/**
	 * Deletes an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.
	 */
	public function delete(
		int $attributeId, 
		int $attributeValueId, 
		float $marketId
	):DeleteResponse;

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