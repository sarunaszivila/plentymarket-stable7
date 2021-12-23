<?php
namespace Plenty\Modules\ContentCache\ContentCacheLink\Models;


/**
 * Eloquent model representing a Content Cache Link.
 */
abstract class ContentCacheLink 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$plentyId;
	
public		$linkType;
	
public		$cacheKey;
	
public		$linkId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}