<?php
namespace Plenty\Modules\Item\ItemCoupon\Hooks;

use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Events\BasketItem\BasketItemEvent;
use Plenty\Modules\Basket\Exceptions\BasketItemCheckException;
use Plenty\Modules\Item\Item\Contracts\ItemRepositoryContract;
use Plenty\Modules\Order\Coupon\Campaign\Contracts\CouponCampaignRepositoryContract;
use Plenty\Modules\Order\Coupon\Campaign\Models\CouponCampaign;

/**
 * CheckItemRestriction
 */
abstract class CheckItemRestriction 
{

	abstract public function handle(
		BasketItemEvent $basketItemEvent
	);

}