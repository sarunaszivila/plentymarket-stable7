<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * Content widget provided by a frontend plugin
 */
abstract class ContentWidget 
{
	
public		$identifier;
	
public		$widgetClass;
	
public		$label;
	
public		$tooltip;
	
public		$previewImageURL;
	
public		$type;
	
public		$maxPerPage;
	
public		$categories;
	
public		$allowedNestingTypes;
	
public		$settings;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}