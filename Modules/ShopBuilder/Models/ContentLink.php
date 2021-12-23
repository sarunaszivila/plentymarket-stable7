<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * Links a content from the shop builder to a layout container of the frontend plugin.
 */
abstract class ContentLink 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$contentId;
	
public		$containerName;
	
public		$pluginSetId;
	
public		$language;
	
public		$active;
	
public		$relatedContentType;
	
public		$relatedContainerName;
	
public		$inherit;
	
public		$invalid;
	
public		$createdAt;
	
public		$updatedAt;
	
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