<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * The NestedDataProviderContract is the interface for nested data providers. Nested data providers are used to provide nested options that can be selected for export. E.g. a list of categories of a specific marketplace. Whenever it is possible, use the concrete implementation Plenty\Modules\Catalog\DataProviders\NestedKeyDataProvider.
 */
interface NestedDataProviderContract 
{

	/**
	 * Returns the data of a specific level, which is determined via the id of a parent value.
	 */
	public function getNestedData(
		string $parentId, 
		string $query = "", 
		array $meta = []
	):array;

	/**
	 * Returns a specific value of the nested data determined by its id.
	 */
	public function getDataByValue(
		string $id
	):array;

	/**
	 * Returns the data that should be provided.
	 */
	public function getData(
		string $query = ""
	):array;

	public function setTemplate(
		TemplateContract $template
	);

	public function setMapping(
		array $mapping
	);

}