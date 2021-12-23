<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The Attribute model including AttributeName and AttributeValue
 */
abstract class Attribute 
{

	const UPDATED_AT = 'plenty_attribute_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const FRUUGOATTRIBUTE = ['null','color','size'];

	const OTTOATTRIBUTE = ['none','Dimension1','Dimension2','Dimension3','Dimension4'];

	const GOOGLESHOPPINGATTRIBUTE = ['none','size','color','material','pattern'];

	const TYPEOFSELECTIONINONLINESTORE = ['dropdown','image','box'];

	const CREATED_AT = 'createdAt';
	
public		$id;
	
public		$backendName;
	
public		$position;
	
public		$isSurchargePercental;
	
public		$isLinkableToImage;
	
public		$amazonAttribute;
	
public		$fruugoAttribute;
	
public		$pixmaniaAttribute;
	
public		$ottoAttribute;
	
public		$googleShoppingAttribute;
	
public		$neckermannAtEpAttribute;
	
public		$typeOfSelectionInOnlineStore;
	
public		$laRedouteAttribute;
	
public		$isGroupable;
	
public		$attributeNames;
	
public		$values;
	
public		$maps;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}