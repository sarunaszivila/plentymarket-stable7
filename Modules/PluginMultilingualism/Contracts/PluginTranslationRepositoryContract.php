<?php
namespace Plenty\Modules\PluginMultilingualism\Contracts;

use Plenty\Modules\PluginMultilingualism\Models\PluginTranslation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Get, create , update and delete plugin translations.
 */
interface PluginTranslationRepositoryContract 
{

	/**
	 * List translations for plugin set
	 */
	public function listTranslations(
		array $filters
	):array;

	/**
	 * Get a translation
	 */
	public function getTranslation(
		int $translationId
	):PluginTranslation;

	/**
	 * Create a translation
	 */
	public function createTranslation(
		array $data
	):PluginTranslation;

	/**
	 * Update a translation
	 */
	public function updateTranslation(
		array $data, 
		int $translationId
	):PluginTranslation;

	/**
	 * Delete a translation
	 */
	public function deleteTranslation(
		int $id
	);

	/**
	 * Delete multiple translation
	 */
	public function deleteTranslations(
		int $pluginSetId, 
		string $languageCode
	);

	/**
	 * Update or create a translation
	 */
	public function updateOrCreateTranslation(
		array $data
	):PluginTranslation;

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