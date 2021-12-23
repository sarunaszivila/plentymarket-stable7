<?php
namespace Plenty\Modules\Order\TaricVatAssignment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelAlreadyExistsException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\TaricVatAssignment\Models\TaricVatAssignment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The TaricVatAssignmentRepositoryContract contains the functionality to get, list, create, update, and delete the taricVatAssignment. Taric identifiers contain information that are necessary to determine the exact vat rate. Taric codes are linked in a variation. A taric vat assignment can only have one entry of each taric code / country ID combination.
 */
interface TaricVatAssignmentRepositoryContract 
{

	/**
	 * Create a taric vat assignment.
	 */
	public function create(
		array $data = []
	):TaricVatAssignment;

	/**
	 * Update a taric vat assignment
	 */
	public function update(
		array $data
	):TaricVatAssignment;

	/**
	 * Deletes a taric vat assignment.
	 */
	public function delete(
		array $data = []
	):bool;

	/**
	 * Search taric vat assignments.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = \Plenty\Modules\Order\TaricVatAssignment\Models\TaricVatAssignment::MAX_ITEMS_PER_PAGE, 
		array $with = []
	):PaginatedResult;

	/**
	 * List taric vat assignment of a taric code
	 */
	public function findByTaricCodeAndCountryId(
		string $taricCode, 
		int $countryNumber
	):TaricVatAssignment;

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