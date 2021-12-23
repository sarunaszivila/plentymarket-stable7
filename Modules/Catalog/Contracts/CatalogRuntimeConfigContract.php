<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Models\Catalog;

/**
 * To be written
 */
interface CatalogRuntimeConfigContract 
{

	/**
	 * Will be run before every export and is meant to provide filters on the template
which can't be defined before the runtime of the export
	 */
	public function applyRuntimeConfig(
		TemplateContract $template, 
		Catalog $catalog
	);

	/**
	 * Will be run before every preview and is meant to provide filters on the template
which can't be defined before the runtime of the preview
	 */
	public function applyPreviewRuntimeConfig(
		TemplateContract $template, 
		Catalog $catalog
	);

}