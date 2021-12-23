<?php
namespace Plenty\Modules\Item\VariationMarketIdentNumber\Models;


/**
 * Variation Market Ident Number
 */
abstract class VariationMarketIdentNumber 
{

	const ASIN_TYPE = 'ASIN';

	const EPID_TYPE = 'EPID';

	const UPC_TYPE = 'UPC';

	const RSIN_TYPE = 'RSIN';

	const ITEMS_PER_PAGE = 50;

	const TYPES = ['ASIN','EPID'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$variationId;
	
public		$countryId;
	
public		$type;
	
public		$position;
	
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