<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * The CatalogExportResult represents the exported data in a specific catalogue export. It implements the Iterator interface and can therefore be used in a foreach loop to retrieve the different pages of the export data.
 */
abstract class CatalogExportResult 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}