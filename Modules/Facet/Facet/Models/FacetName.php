<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet name model.
 */
abstract class FacetName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$facetId;
	
public		$lang;
	
public		$name;
	
public		$facet;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}