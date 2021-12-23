<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\NestedDataProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * The NestedKeyDataProvider is used to define a section of a complex mapping in the catalogue. It is specifically used if the list of available values contains nested values. E.g. a list of categories with sub-categories.
 */
abstract class NestedKeyDataProvider 
{

	abstract public function getKey(
	):string;

	abstract public function getNestedRows(
		 $parentId
	):array;

	abstract public function getMetaData(
	);

	abstract public function getNestedData(
		string $parentId, 
		string $query = "", 
		array $meta = []
	):array;

	abstract public function getRows(
	):array;

	abstract public function setTemplate(
		TemplateContract $template
	);

	abstract public function setMapping(
		array $mapping
	);

	/**
	 * Returns a specific value of the nested data determined by its id.
	 */
	abstract public function getDataByValue(
		string $id
	):array;

}