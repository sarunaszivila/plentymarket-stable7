<?php
namespace Plenty\Modules\Order\Currency\Contracts;


/**
 * Provides methods for currency conversion data.
 */
interface CurrencyConversionSettingsRepositoryContract 
{

	/**
	 * Gets the currency conversion setting.
	 */
	public function getCurrencyConversionList(
	):array;

}