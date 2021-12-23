<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * The CatalogMutatorContract represents one mutator that will be used to manipulate a specific item in the export either before or after it has been mapped.
 */
interface CatalogMutatorContract 
{

	public function mutate(
		 $item
	);

}