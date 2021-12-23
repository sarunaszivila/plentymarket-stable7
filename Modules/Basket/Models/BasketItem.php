<?php
namespace Plenty\Modules\Basket\Models;


/**
 * The shopping cart item model
 */
abstract class BasketItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';

	const BASKET_ITEM_TYPE_VARIATION = 10;

	const BASKET_ITEM_TYPE_BUNDLE = 11;

	const BASKET_ITEM_TYPE_BUNDLE_COMPONENT = 12;

	const BASKET_ITEM_TYPE_ITEM_SET = 13;

	const BASKET_ITEM_TYPE_ITEM_SET_COMPONENT = 14;

	const BASKET_ITEM_TYPE_VARIATION_ORDER_PROPERTY = 15;
	
public		$id;
	
public		$basketId;
	
public		$sessionId;
	
public		$orderRowId;
	
public		$quantity;
	
public		$quantityOriginally;
	
public		$itemId;
	
public		$priceId;
	
public		$attributeValueSetId;
	
public		$rebate;
	
public		$vat;
	
public		$price;
	
public		$givenPrice;
	
public		$givenVatId;
	
public		$useGivenPrice;
	
public		$inputWidth;
	
public		$inputLength;
	
public		$inputHeight;
	
public		$itemType;
	
public		$externalItemId;
	
public		$noEditByCustomer;
	
public		$costCenterId;
	
public		$giftPackageForRowId;
	
public		$position;
	
public		$size;
	
public		$shippingProfileId;
	
public		$referrerId;
	
public		$deliveryDate;
	
public		$categoryId;
	
public		$reservationDatetime;
	
public		$variationId;
	
public		$bundleVariationId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$attributeTotalMarkup;
	
public		$basketItemOrderParams;
	
public		$basketItemVariationProperties;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}