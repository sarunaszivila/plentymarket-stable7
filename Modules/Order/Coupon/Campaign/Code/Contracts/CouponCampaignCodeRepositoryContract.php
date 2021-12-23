<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Code\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Coupon\Campaign\Code\Models\CouponCampaignCode;

/**
 * This interface allows you to get and create coupon codes.
 */
interface CouponCampaignCodeRepositoryContract 
{

	/**
	 * Gets a coupon code. The code string must be specified.
	 */
	public function getByCode(
		string $code, 
		array $with = []
	):CouponCampaignCode;

	/**
	 * Delete a coupon code.
	 */
	public function deleteCode(
		string $code, 
		bool $withoutUsed = false
	):bool;

	/**
	 * Creates a coupon code.
	 */
	public function create(
		array $data
	):CouponCampaignCode;

	/**
	 * Disable or enable coupon
	 */
	public function setDisabledByCode(
		string $code, 
		int $disabled
	):int;

}