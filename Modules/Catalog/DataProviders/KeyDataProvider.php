<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * The KeyDataProvider is used to define a section of a complex mapping in the catalogue. A complex mapping refers to the assignment of a value from a predefined list of possible values to a key if a specific requirement is met. E.g. put the value 'awesomeBrand' into the key 'brand', if manufacturer 'awesomeManufacturer' is linked to a variation.
 */
abstract class KeyDataProvider 
{

	abstract public function getKey(
	):string;

	abstract public function getRows(
	):array;

	abstract public function setTemplate(
		TemplateContract $template
	);

	abstract public function setMapping(
		array $mapping
	);

}