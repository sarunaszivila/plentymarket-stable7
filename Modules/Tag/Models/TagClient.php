<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag client model.
 */
abstract class TagClient 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$tagId;
	
public		$plentyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}