<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the currency is changed in the online store.
 */
abstract class FrontendCurrencyChanged 
{

	/**
	 * Gets the changed currency.
	 */
	abstract public function getCurrency(
	):string;

	/**
	 * Gets the exchange rate used for converting the currency.
	 */
	abstract public function getCurrencyExchangeRatio(
	):float;

}