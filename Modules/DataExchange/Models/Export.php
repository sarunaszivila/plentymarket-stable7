<?php
namespace Plenty\Modules\DataExchange\Models;


/**
 * Export model
 */
abstract class Export 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';

	const DATA_TYPE_ITEM = 'item';

	const DATA_TYPE_ORDER = 'order';

	const DATA_TYPE_PURCHASE_ORDER = 'purchase_order';

	const DATA_TYPE_PURCHASE_ORDER_ITEM = 'purchase_order_item';

	const DATA_TYPE_ORDER_ITEM = 'order_item';

	const DATA_TYPE_CONTACT = 'contact';

	const DATA_TYPE_CONTACT_NEWSLETTER = 'contactNewsletter';

	const DATA_TYPE_WAREHOUSE = 'warehouse';

	const DATA_TYPE_ATTRIBUTE = 'attribute';

	const DATA_TYPE_CATEGORY = 'category';

	const DATA_TYPE_PROPERTY = 'property';

	const DATA_TYPE_ITEM_IMAGE = 'item_image';

	const DATA_TYPE_MANUFACTURER = 'manufacturer';

	const DATA_TYPE_STOCK_MOVEMENT = 'stock_movement';

	const DATA_TYPE_STOCK = 'stock';

	const DATA_TYPE_FACET = 'facet';

	const DATA_TYPE_FACET_VALUE = 'facetValue';

	const DATA_TYPE_FACET_VALUE_REFERENCE = 'facetValueReference';

	const DATA_TYPE_LISTING = 'listing';

	const DATA_TYPE_LISTING_MARKET_HISTORY = 'listingMarketHistory';

	const OUTPUT_TYPE_ADMIN = 'admin';

	const OUTPUT_TYPE_DOWNLOAD = 'download';

	const OUTPUT_TYPE_FTP = 'ftp';

	const OUTPUT_TYPE_SFTP = 'sftp';

	const OUTPUT_TYPE_FTPS = 'ftps';

	const OUTPUT_TYPE_CACHE = 'cache';

	const DEFAULT_ITEMS_PER_PAGE = 50;
	
public		$id;
	
public		$name;
	
public		$type;
	
public		$limit;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$formatKey;
	
public		$outputType;
	
public		$generateCache;
	
public		$filters;
	
public		$outputParams;
	
public		$formatSettings;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}