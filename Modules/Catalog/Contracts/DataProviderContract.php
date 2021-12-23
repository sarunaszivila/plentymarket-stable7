<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * The DataProviderContract is the interface for data providers. Data providers provide the available fields that can be mapped in a template to create a catalogue. Whenever it is possible, use one of the concrete implementations Plenty\Modules\Catalog\DataProviders\BaseDataProvider, Plenty\Modules\Catalog\DataProviders\KeyDataProvider or Plenty\Modules\Catalog\DataProviders\NestedKeyDataProvider.
 */
interface DataProviderContract 
{

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