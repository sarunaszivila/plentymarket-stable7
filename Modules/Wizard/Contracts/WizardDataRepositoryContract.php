<?php
namespace Plenty\Modules\Wizard\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface provides methods to create, get, list, update and delete wizard data
 */
interface WizardDataRepositoryContract 
{

	/**
	 * Creates a new WizardData.
	 */
	public function create(
		string $wizardKey, 
		array $steps = []
	);

	/**
	 * Creates a new WizardData option
	 */
	public function createDataOption(
		string $wizardKey, 
		array $data = [], 
		string $optionId = "default"
	);

	/**
	 * Get a single WizardData by its ID
	 */
	public function get(
		string $wizardKey, 
		string $pluginSetHash = ""
	);

	/**
	 * Get a single WizardData for an option ID
	 */
	public function getByOptionId(
		string $wizardKey, 
		string $optionId = "default"
	);

	public function findByWizardKey(
		string $wizardKey
	);

	/**
	 * List all WizardData for current plenty ID.
	 */
	public function list(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):array;

	/**
	 * Update data for a WizardData
	 */
	public function update(
		string $wizardKey, 
		array $properties
	);

	/**
	 * Update data for a WizardData option
	 */
	public function updateDataOption(
		string $wizardKey, 
		string $optionId, 
		array $data, 
		string $stepKey, 
		bool $skipValidation = false
	);

	/**
	 * Delete a single WizardData by its ID
	 */
	public function delete(
		string $wizardKey
	);

	/**
	 * Delete a single WizardData by its ID
	 */
	public function deleteDataOption(
		string $wizardKey, 
		string $optionId
	);

	/**
	 * Finalize wizard
	 */
	public function finalize(
		string $wizardKey, 
		string $optionId = "default", 
		array $data = []
	);

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