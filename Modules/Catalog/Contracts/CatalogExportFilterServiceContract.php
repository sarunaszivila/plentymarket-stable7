<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Document\DocumentSearch;

/**
 * To be written
 */
interface CatalogExportFilterServiceContract 
{

	public function applyFilters(
		DocumentSearch $documentSearch, 
		array $config
	);

}