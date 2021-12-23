<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface CatalogRuntimeConfigProviderContract 
{

	/**
	 * Determines if a preview can be exported through catalogs that use the specific template
	 */
	public function isPreviewable(
	):bool;

	/**
	 * Returns a class name through which the export can be configured with information that isn't known before
the export runtime
	 */
	public function getRuntimeConfigClass(
	):string;

	/**
	 * Returns a class name through which the export result can be converted into the necessary format (e.g. json or csv)
	 */
	public function getResultConverterClass(
	):string;

}