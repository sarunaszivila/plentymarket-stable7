<?php
namespace Plenty\Modules\Plugin\Models;


/**
 * Model representing an installed Plugin
 */
abstract class InstalledPlugins 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$variationId;
	
public		$itemId;
	
public		$removed;
	
public		$lastUpdateChecksum;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}