<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;
use Plenty\Modules\Catalog\Dummy\VariationCatalogExportType;

/**
 * The TemplateContainerContract is the interface of the template container. The template container is a singleton, which allows to register and retrieve templates.
 */
interface TemplateContainerContract 
{

	/**
	 * Registers a new template that can be used to create a catalogue.
	 */
	public function register(
		string $name, 
		string $type, 
		string $providerClass = "", 
		string $exportType = "Plenty\Modules\Catalog\Dummy\VariationCatalogExportType"
	):TemplateContract;

	/**
	 * Returns all registered templates.
	 */
	public function getTemplates(
	):array;

	/**
	 * Returns a specific template by its identifier.
	 */
	public function getTemplate(
		string $identifier
	):TemplateContract;

	/**
	 * Returns a specific template by its identifier without booting it.
	 */
	public function getTemplateWithoutBootingIt(
		string $identifier
	):TemplateContract;

}