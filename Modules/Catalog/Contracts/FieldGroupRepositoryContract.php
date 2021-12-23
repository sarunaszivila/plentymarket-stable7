<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The FieldGroupRepositoryContract is the contract for the field group repository. It allows to retrieve fields of a field group. Field groups represent the different groups of available sources that can be seen in the data picker component in the catalogue UI. Each field represents a mappable source.
 */
interface FieldGroupRepositoryContract 
{

	/**
	 * Get list of fields
	 */
	public function getFields(
		string $id, 
		int $page, 
		int $itemsPerPage, 
		string $parentId = null
	):PaginatedResult;

	/**
	 * Get list of fields for search
	 */
	public function getSearchFields(
		string $id, 
		array $hidden = []
	):array;

	/**
	 * Get field by id
	 */
	public function getFieldById(
		string $id, 
		string $fieldId
	):array;

	/**
	 * Get Fields by id of the catalog
	 */
	public function getFieldsByCatalogId(
		string $id, 
		string $catalogId
	):array;

	public function fieldValuesTree(
		string $id, 
		int $page, 
		int $itemsPerPage
	):array;

}