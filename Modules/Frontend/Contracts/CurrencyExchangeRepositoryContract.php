<?php
namespace Plenty\Modules\Frontend\Contracts;


/**
 * The CurrencyExchangeRatioRepositoryContract is the interface for the currency exchange repository. This interface allows you to get the default system currency, to get exchange ratios for every currency and to convert an amount from the default currency into a given currency or from a given currency into the default currency.
 */
interface CurrencyExchangeRepositoryContract 
{

	/**
	 * Get the exchange rate for the given currency
	 */
	public function getExchangeRatioByCurrency(
		string $currency
	):float;

	/**
	 * Get the default currency.
	 */
	public function getDefaultCurrency(
	):string;

	/**
	 * Converts the given value from the default currency to the given currency.
	 */
	public function convertFromDefaultCurrency(
		string $currency, 
		float $amount, 
		float $exchangeRatio = 0.0
	):float;

	/**
	 * Converts the given value to the default currency from the given currency.
	 */
	public function convertToDefaultCurrency(
		string $currency, 
		float $amount, 
		float $exchangeRatio = 0.0
	):float;

}