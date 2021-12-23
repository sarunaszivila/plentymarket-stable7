<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * The CatalogTemplateFieldCallableContract is the Interface that has to be implemented by each callable that is going to be linked to a field.
 */
interface CatalogTemplateFieldCallableContract 
{

	/**
	 * This method will be called if the linked field is mapped. The method will receive the loaded data for the item,
the value that was mapped by the catalog and the origin of that value.
	 */
	public function call(
		 $item, 
		 $value, 
		string $originType
	);

}