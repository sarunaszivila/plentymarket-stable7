<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Models\Catalog;

/**
 * The CatalogDynamicConfigContract is the Interface that has to be implemented to run specific export logic that changes filters, settings and other information which is not known on the template definition level. This logic is applied in each catalog export triggered by catalog specific logic (e.g. preview, asynchronus exports etc) to make sure, that manual downloads of a user through the UI deliver identical results as a cron export to a marketplace. Can be applied manually in exports that get triggered from other modules or plugins.
 */
interface CatalogDynamicConfigContract 
{

	/**
	 * Will be run before every export and is meant to provide filters on the template
which can't be defined before the runtime of the export.
	 */
	public function applyDynamicConfig(
		TemplateContract $template, 
		Catalog $catalog, 
		CatalogExportServiceContract $catalogExportService
	);

	/**
	 * Will be run before every preview and is meant to provide filters on the template
which can't be defined before the runtime of the preview
	 */
	public function applyDynamicPreviewConfig(
		TemplateContract $template, 
		Catalog $catalog, 
		CatalogExportServiceContract $catalogExportService
	);

}