<?php
namespace Plenty\Modules\Catalog\Services\Converter\Containers;

use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\BaseResultConverter;

/**
 * The DefaultResultConverterContainer collects all result converters for a specific template.
 */
abstract class ResultConverterContainer 
{

	abstract public function addResultConverter(
		BaseResultConverter $resultConverter, 
		bool $isDefault = false
	);

	abstract public function getResultConverters(
	):array;

	abstract public function getResultConvertersCount(
	):int;

	abstract public function getResultConverter(
		string $key
	):CatalogResultConverterContract;

	abstract public function getDefaultResultConverter(
	):CatalogResultConverterContract;

}