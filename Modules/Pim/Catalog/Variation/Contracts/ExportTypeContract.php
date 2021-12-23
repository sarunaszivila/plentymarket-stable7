<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Contracts;

use Plenty\Modules\Catalog\Contracts\CatalogExportTypeContract;

/**
 * The export type to load variation data through the catalogue. This should not be extended, instead just consume the constant when registering a template.
 */
interface ExportTypeContract 
{

	const EXPORT_TYPE_IDENTIFIER = 'vdi';

}