<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Contracts;

use Plenty\Modules\Order\Coupon\Campaign\Models\CouponCampaign;
use Plenty\Modules\Order\Coupon\Code\Validation\Models\CouponCodeValidation;

/**
 * This is the contract for the coupon campaign repository. It allows you to get coupon campaigns.
 */
interface CouponCampaignRepositoryContract 
{

	/**
	 * Get a coupon campaign
	 */
	public function findById(
		 $id
	):CouponCampaign;

	/**
	 * Get the CouponCampaign model from the database by emailPlaceholder.
	 */
	public function findByEmailPlaceholder(
		string $placeholder
	):CouponCampaign;

	/**
	 * Get the coupon campaign of a coupon code
	 */
	public function findByCouponCode(
		string $couponCode
	):CouponCampaign;

	/**
	 * Get the display type of a coupon
	 */
	public function getCouponDisplayType(
		CouponCodeValidation $couponCodeValidation
	):string;

	/**
	 * Create a coupon campaign
	 */
	public function create(
		array $data
	):CouponCampaign;

	/**
	 * Modifies the two counter 'used' and 'unused'
	 */
	public function modifyCampaignUsage(
		int $couponCampaignId, 
		string $operator, 
		string $field
	);

	/**
	 * Delete a coupon campaign
	 */
	public function delete(
		int $couponCampaignId
	):bool;

	/**
	 * update a coupon campaign
	 */
	public function update(
		array $data
	):CouponCampaign;

}