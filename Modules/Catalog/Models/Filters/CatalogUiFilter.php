<?php
namespace Plenty\Modules\Catalog\Models\Filters;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterContainer;
use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;

/**
 * A catalog UI filter provides the information that is necessary for a filter to be displayed in the UI.
 */
abstract class CatalogUiFilter 
{

	abstract public function getKey(
	):string;

	abstract public function getLabel(
	):string;

	abstract public function required(
	):bool;

	abstract public function getType(
	):string;

	abstract public function isVisible(
	):bool;

	abstract public function getDefaultValue(
	);

	abstract public function getValues(
	):array;

	abstract public function getCustomData(
	);

	abstract public function getNestedUiFilterContainer(
	):CatalogUiFilterContainer;

	abstract public function setNestedUiFilterContainer(
		CatalogUiFilterContainer $nestedUiFilterContainer
	);

	abstract public function setSelectionValueContainer(
		CatalogUiFilterSelectionValueContainer $selectionValueContainer
	);

	abstract public function getSelectionValueContainer(
	):CatalogUiFilterSelectionValueContainer;

}