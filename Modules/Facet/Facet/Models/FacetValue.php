<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet value model.
 */
abstract class FacetValue 
{

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'plenty_facet_value_last_update_timestamp';

	const CREATED_AT = 'plenty_facet_value_insert_timestamp';
	
public		$id;
	
public		$facetId;
	
public		$cssClass;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$facet;
	
public		$names;
	
public		$references;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}