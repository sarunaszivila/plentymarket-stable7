<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet model.
 */
abstract class Facet 
{

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'plenty_facet_last_update_timestamp';

	const CREATED_AT = 'plenty_facet_insert_timestamp';

	const TYPE_DYNAMIC = 'dynamic';

	const TYPE_PRODUCER = 'producer';

	const TYPE_AVAILABILITY = 'availability';

	const TYPE_PRICE = 'price';

	const SORT_POSITION = 'position';

	const SORT_RATE = 'rate';

	const SORT_A_Z = 'a_z';

	const FILTER_RESTRICT = 'restrict';

	const FILTER_MULTI = 'multi';
	
public		$id;
	
public		$cssClass;
	
public		$position;
	
public		$sort;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$type;
	
public		$minResultCount;
	
public		$maxResultCount;
	
public		$filterMethod;
	
public		$names;
	
public		$values;
	
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