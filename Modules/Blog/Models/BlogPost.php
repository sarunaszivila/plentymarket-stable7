<?php
namespace Plenty\Modules\Blog\Models;


/**
 * The blog post model.
 */
abstract class BlogPost 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$plentyIdHash;
	
public		$data;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}