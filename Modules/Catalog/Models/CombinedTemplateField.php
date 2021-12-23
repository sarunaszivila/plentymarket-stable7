<?php
namespace Plenty\Modules\Catalog\Models;

use Plenty\Modules\Catalog\Callables\EmptyCatalogTemplateFieldCallable;
use Plenty\Modules\Catalog\Constants\CatalogMappingTypes;
use Plenty\Modules\Catalog\Containers\CatalogTemplateFieldContainer;
use Plenty\Modules\Catalog\Contracts\CatalogMappingValueProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldCallableContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract;

/**
 * A combined template field is a mix out of simple and complex template fields. You can define a field with predefined valid values, which will be exported if all nested fields were filled successfully in the export. An example is a barcode type. The customer can choose a barcode type, that is exported if the field barcode was successfully mapped with a specific source.
 */
abstract class CombinedTemplateField implements \Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract

{

	/**
	 * CombinedTemplateField constructor.
	 */
	abstract public function __construct(
		string $exportKey, 
		string $key, 
		string $label, 
		CatalogMappingValueProviderContract $catalogMappingValueProvider, 
		CatalogTemplateFieldContainer $catalogTemplateFieldContainer, 
		bool $isRequired = false, 
		bool $isLocked = false, 
		bool $isArray = false, 
		array $meta = [], 
		array $defaultSources = []
	);

	abstract public function getKey(
	):string;

	abstract public function getLabel(
	):string;

	abstract public function isRequired(
	):bool;

	abstract public function isLocked(
	):bool;

	abstract public function isArray(
	):bool;

	abstract public function getMeta(
	):array;

	abstract public function getCallable(
	):CatalogTemplateFieldCallableContract;

	abstract public function getMappingValueProvider(
	):CatalogMappingValueProviderContract;

	abstract public function getDefaultSources(
	):array;

	abstract public function getExportKey(
	):string;

	abstract public function getNestedFields(
	):CatalogTemplateFieldContainer;

	abstract public function getType(
	):int;

	abstract public function setCallable(
		CatalogTemplateFieldCallableContract $callable
	);

	abstract public function toArray(
	):array;

}