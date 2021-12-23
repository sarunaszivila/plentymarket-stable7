<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * A CatalogMappingValue represents a single available option in the catalog UI.
 */
abstract class CatalogMappingValue 
{

	/**
	 * CatalogMappingValue constructor.
	 */
	abstract public function __construct(
		string $identifier, 
		string $label, 
		 $exportValue, 
		string $parentId = null, 
		bool $hasChildren = false
	);

	abstract public function getIdentifier(
	):string;

	abstract public function getLabel(
	):string;

	abstract public function getExportValue(
	);

	abstract public function hasChildren(
	):bool;

	abstract public function getParentId(
	):string;

	abstract public function toArray(
	):array;

}