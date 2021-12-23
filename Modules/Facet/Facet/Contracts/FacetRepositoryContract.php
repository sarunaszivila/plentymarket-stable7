<?php
namespace Plenty\Modules\Facet\Facet\Contracts;

use Exception;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Facet\Facet\Models\Facet;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the facet repository
 */
interface FacetRepositoryContract 
{

	public function search(
		array $with, 
		array $filters
	):Collection;

	public function listByPlentyId(
		int $plentyId, 
		string $lang = "de"
	):array;

	public function findOne(
		int $id
	):Facet;

	public function create(
		array $data
	):Facet;

	public function update(
		int $id, 
		array $data
	):Facet;

	public function delete(
		int $id
	):DeleteResponse;

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