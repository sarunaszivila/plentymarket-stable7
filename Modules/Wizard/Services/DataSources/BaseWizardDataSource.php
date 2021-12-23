<?php
namespace Plenty\Modules\Wizard\Services\DataSources;


/**
 * Base data source for wizards
 */
abstract class BaseWizardDataSource 
{
	
protected		$wizardKey = null;
	
protected		$dataStructure;
	
	/**
	 * Sets the wizard key for this data source
	 */
	abstract public function setWizardKey(
		string $wizardKey
	);

	/**
	 * List of option identifiers
	 */
	abstract public function getIdentifiers(
	):array;

	/**
	 * Create data
	 */
	abstract public function create(
		array $steps = []
	):array;

	/**
	 * Get data
	 */
	abstract public function get(
	):array;

	/**
	 * Update data
	 */
	abstract public function update(
		array $properties = []
	);

	/**
	 * Delete data
	 */
	abstract public function delete(
	);

	/**
	 * Create data option
	 */
	abstract public function createDataOption(
		array $data = [], 
		string $optionId = "default"
	):array;

	/**
	 * Get data option by its option ID
	 */
	abstract public function getByOptionId(
		string $optionId = "default"
	):array;

	/**
	 * Update data option
	 */
	abstract public function updateDataOption(
		string $optionId = "default", 
		array $data = [], 
		string $stepKey = ""
	):array;

	/**
	 * Delete data option
	 */
	abstract public function deleteDataOption(
		string $optionId
	);

	abstract public function finalize(
		string $optionId, 
		array $data = []
	);

}