<?php
namespace Plenty\Modules\Facet\Facet\Contracts;

use Exception;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Facet\Facet\Models\FacetValue;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the facet value repository
 */
interface FacetValueRepositoryContract 
{

	public function search(
		array $with, 
		array $filters
	):Collection;

	public function create(
		array $data
	):FacetValue;

	public function update(
		int $id, 
		array $data
	):FacetValue;

	public function delete(
		int $id
	):DeleteResponse;

	public function findOne(
		int $id
	):FacetValue;

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