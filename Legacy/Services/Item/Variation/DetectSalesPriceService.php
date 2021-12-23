<?php
namespace Plenty\Legacy\Services\Item\Variation;


/**
 * To be written...
 */
abstract class DetectSalesPriceService 
{

	const PRICE_TYPE_RRP = 'rrp';

	const PRICE_TYPE_SPECIAL_OFFER = 'specialOffer';

	const PRICE_TYPE_DEFAULT = 'default';

	const PRICE_TYPE_SUBSCRIPTION = 'subscription';

	const PRICE_TYPE_SET = 'set';

	abstract public function getQuantity(
	);

	abstract public function setQuantity(
		 $quantity
	):DetectSalesPriceService;

	abstract public function getCurrency(
	);

	abstract public function setCurrency(
		 $currency
	):DetectSalesPriceService;

	abstract public function getPlentyId(
	);

	abstract public function setPlentyId(
		 $plentyId
	):DetectSalesPriceService;

	abstract public function getOrderReferrer(
	);

	abstract public function setOrderReferrer(
		 $orderReferrer
	):DetectSalesPriceService;

	abstract public function getCustomerClass(
	);

	abstract public function setCustomerClass(
		 $customerClass
	):DetectSalesPriceService;

	abstract public function getType(
	);

	abstract public function setType(
		 $type
	):DetectSalesPriceService;

	abstract public function getCountryOfDelivery(
	);

	abstract public function setCountryOfDelivery(
		 $countryOfDelivery
	):DetectSalesPriceService;

	abstract public function getAccountType(
	);

	abstract public function setAccountType(
		 $accountType
	):DetectSalesPriceService;

	abstract public function getAccountId(
	);

	abstract public function setAccountId(
		 $accountId
	):DetectSalesPriceService;

	abstract public function detect(
	);

}