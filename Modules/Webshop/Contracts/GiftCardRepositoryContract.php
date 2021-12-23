<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;

/**
 * Repository to get information about gift cards and corresponding order items
 */
interface GiftCardRepositoryContract 
{

	/**
	 * Checks if a gift card document has already been created for this order item
	 */
	public function hasGiftCardPdf(
		int $orderId, 
		int $orderItemId, 
		int $campaignCodeOrderId
	):bool;

	/**
	 * Get Information about the gift card
	 */
	public function getGiftCardInformation(
		int $orderItemId
	):array;

	/**
	 * Return true if its not a gift card or the codes are not redeemed
	 */
	public function isReturnable(
		int $orderItemId
	):bool;

	/**
	 * Returnable quantity for giftCard
	 */
	public function getReturnQuantity(
		int $orderItemId
	):int;

}