<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Containers\CatalogTemplateFieldContainer;

/**
 * The CatalogTemplateFieldContract representes a single field in a template. Use a specific implementation of this interface to create a field.
 */
interface CatalogTemplateFieldContract 
{

	/**
	 * Returns the key that will be present in the exported result
	 */
	public function getExportKey(
	):string;

	/**
	 * Returns a unique identifier for this field
	 */
	public function getKey(
	):string;

	/**
	 * Returns the label of the field that will be visible in the UI
	 */
	public function getLabel(
	):string;

	/**
	 * Defines if the field is required.
	 */
	public function isRequired(
	):bool;

	/**
	 * Defines if the field is locked. Locked fields will be visible in the UI but can not be overwritten.
	 */
	public function isLocked(
	):bool;

	/**
	 * Defines if (true) all found sources will be exported as an array or (false) the first filled source will be used
to fill the field.
	 */
	public function isArray(
	):bool;

	/**
	 * Returns a callable that should be run after mapping the field to manipulate it if necessary.
	 */
	public function getCallable(
	):CatalogTemplateFieldCallableContract;

	/**
	 * Returns an array of meta information that will not be used by the catalog itself. This array can be used to pass
data through the export that the specific implementation needs.
	 */
	public function getMeta(
	):array;

	/**
	 * Returns an array of default sources. Default sources will be used if no other sources are manually added through the
UI.
	 */
	public function getDefaultSources(
	):array;

	public function getMappingValueProvider(
	):CatalogMappingValueProviderContract;

	public function getNestedFields(
	):CatalogTemplateFieldContainer;

	public function getType(
	):int;

}