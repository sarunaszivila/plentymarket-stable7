<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet value name model.
 */
abstract class FacetValueName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$valueId;
	
public		$lang;
	
public		$name;
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}