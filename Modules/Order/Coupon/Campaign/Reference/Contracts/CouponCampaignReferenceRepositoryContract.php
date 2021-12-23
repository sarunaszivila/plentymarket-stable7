<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Reference\Contracts;

use Illuminate\Support\Collection;

/**
 * This is the contract for the coupon campaign reference repository. It allows you to get and create coupon campaigns references.
 */
interface CouponCampaignReferenceRepositoryContract 
{

	/**
	 * Get a coupon campaign
	 */
	public function findByCouponCampaignId(
		int $couponCampaignId
	):Collection;

	/**
	 * Create a Coupon Campaign reference
	 */
	public function create(
		array $data
	):Collection;

}