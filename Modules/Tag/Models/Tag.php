<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The Tag model
 */
abstract class Tag 
{

	const TAG_AVAILABILITIES_RELATION = 'availabilities';

	const TAG_NAMES_RELATION = 'names';

	const TAG_RELATIONSHIPS_RELATION = 'relationship';

	const TAG_CLIENTS_RELATION = 'clients';

	const AVAILABLE_TYPES = ['item','contact'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$tagName;
	
public		$color;
	
public		$availabilities;
	
public		$names;
	
public		$relationships;
	
public		$clients;
	
public		$updatedAt;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}