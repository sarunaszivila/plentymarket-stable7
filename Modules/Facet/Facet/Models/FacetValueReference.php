<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet value reference model.
 */
abstract class FacetValueReference 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'plenty_facet_value_reference_insert_timestamp';

	const TYPE_ATTRIBUTE = 'attribute';

	const TYPE_CHARACTER = 'character';

	const TYPE_PROPERTY = 'property';

	const TYPE_PROPERTY_SELECTION = 'property-selection';

	const TYPE_PRODUCER = 'producer';

	const TYPE_AVAILABILITY = 'availability';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$facetId;
	
public		$facetValueId;
	
public		$type;
	
public		$groupId;
	
public		$valueId;
	
public		$createdAt;
	
public		$facet;
	
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