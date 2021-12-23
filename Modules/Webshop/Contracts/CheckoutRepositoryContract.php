<?php
namespace Plenty\Modules\Webshop\Contracts;


/**
 * Repository to get and set checkout data
 */
interface CheckoutRepositoryContract 
{

	/**
	 * Get the currently used currency.
	 */
	public function getCurrency(
	):string;

	/**
	 * Set the currency.
	 */
	public function setCurrency(
		string $currency
	);

	/**
	 * Get the id of the current shipping country. Default to the configured country id from the webstore configuration.
	 */
	public function getShippingCountryId(
	):int;

}