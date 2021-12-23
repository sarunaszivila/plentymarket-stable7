<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Legacy\Services\Item\Variation\SalesPriceService;
use Plenty\Modules\Item\Variation\Models\Variation;
use Plenty\Modules\Webshop\Contracts\UnitRepositoryContract;

/**
 * Helper class for base price information.
 */
abstract class BasePrice 
{

	/**
	 * Return a formatted string with base price information.
	 */
	abstract public function getFormattedBasePrice(
		int $variationId, 
		float $price, 
		string $currency, 
		string $language = null
	):string;

}