<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyMarket;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property markets.
 */
interface PropertyMarketRepositoryContract 
{

	/**
	 * Gets a property market. The ID of the property market must be specified.
	 */
	public function getPropertyMarket(
		int $propertyMarketId
	):PropertyMarket;

	/**
	 * Lists property markets
	 */
	public function listPropertyMarkets(
	):array;

	/**
	 * Creates a property market
	 */
	public function createPropertyMarket(
		array $data
	):PropertyMarket;

	/**
	 * Updates a property market. The ID of property market must be specified.
	 */
	public function updatePropertyMarket(
		int $propertyMarketId, 
		array $data
	):PropertyMarket;

	/**
	 * Deletes a property market. The ID of property market must be specified.
	 */
	public function deletePropertyMarket(
		int $propertyMarketId
	):array;

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