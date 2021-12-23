<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * The rendered preview of a content widget
 */
abstract class ContentWidgetPreview 
{
	
public		$identifier;
	
public		$content;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}