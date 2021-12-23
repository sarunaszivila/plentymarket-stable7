<?php
namespace Plenty\Legacy\Models\Item;


/**
 * Configuration of item images
 */
abstract class ItemImageSettings 
{

	const INVALIDATION_CACHE_KEY_PREFIX = 'item_image_invalidation_';

	const INVALIDATION_CACHE_KEY_GLOBAL = 'item_image_invalidation_0';
	
public		$cdnUrl;
	
public		$maxAge;
	
public		$imageExportPos;
	
public		$defaultExport;
	
public		$ftpImport;
	
public		$ftpImportMatching;
	
public		$neckermannExport;
	
public		$attributeImageWidth;
	
public		$attributeImageHeight;
	
public		$name;
	
public		$placeholder;
	
public		$sizes;
	
public		$aliases;
	
public		$legacyPreviousSizes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}