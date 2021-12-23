<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Reference\Models;


/**
 * The CouponCampaignReference model contains all information of a campaign reference.
 */
abstract class CouponCampaignReference 
{

	const REFERENCE_TYPE_CATEGORY = 'category';

	const REFERENCE_TYPE_ITEM = 'item';

	const REFERENCE_TYPE_WEBSTORE = 'webstore';

	const REFERENCE_TYPE_CUSTOMER_GROUP = 'customer_group';

	const REFERENCE_TYPE_CUSTOMER_TYPE = 'customer_type';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$campaignId;
	
public		$referenceType;
	
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