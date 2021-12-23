<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeMap;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute map repository
 */
interface AttributeMapRepositoryContract 
{

	/**
	 * Creates a new attribute map.
	 */
	public function create(
		array $data
	):AttributeMap;

	/**
	 * Gets an attribute map. The ID of the attribute and the ID of the market must be specified.
	 */
	public function find(
		int $attributeId, 
		float $marketId
	):AttributeMap;

	/**
	 * Lists all attribute maps.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $filter = [], 
		array $with = []
	):array;

	/**
	 * Updates an attribute map. The ID of the attribute and the ID of the market must be specified.
	 */
	public function update(
		array $data, 
		int $attributeId, 
		float $marketId
	):AttributeMap;

	/**
	 * Deletes an attribute map. The ID of the attribute and the ID of the market must be specified.
	 */
	public function delete(
		int $attributeId, 
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