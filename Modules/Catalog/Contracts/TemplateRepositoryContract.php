<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Models\TemplateGroup;

/**
 * The TemplateRepositoryContract is the interface for the template repository. It allows to retrieve templates and their mappings.
 */
interface TemplateRepositoryContract 
{

	/**
	 * Get list of templates
	 */
	public function getTemplates(
	):array;

	/**
	 * Get template
	 */
	public function getTemplate(
		string $id, 
		string $data
	):array;

	/**
	 * Get list of mappings
	 */
	public function getMappings(
		string $id
	):array;

	/**
	 * Get mapping
	 */
	public function getMapping(
		string $id, 
		string $mappingId
	):array;

	/**
	 * Get mapping data
	 */
	public function getMappingData(
		string $id, 
		string $mappingId, 
		string $parentId = null
	):array;

	/**
	 * Get mapping data by id
	 */
	public function getMappingDataById(
		string $id, 
		string $mappingId, 
		string $dataId
	):array;

	/**
	 * Test export of a catalog
	 */
	public function test(
		string $id
	);

	/**
	 * Get all mappings
	 */
	public function getAllMappings(
		string $id
	):array;

	/**
	 * Get assignments
	 */
	public function getAssignments(
		string $id
	):array;

}