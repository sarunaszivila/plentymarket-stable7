<?php
namespace Plenty\Modules\Catalog\Models\Filters;


/**
 * A catalog UI filter selection value represents an available filter option in the UI.
 */
abstract class CatalogUiFilterSelectionValue 
{

	abstract public function getCaption(
	):string;

	abstract public function getValue(
	);

	/**
	 * Sets the icon and color to show and image in the select of the filter
	 */
	abstract public function setIcon(
		string $icon, 
		string $color = null
	);

	abstract public function getIcon(
	);

	abstract public function getColor(
	);

}