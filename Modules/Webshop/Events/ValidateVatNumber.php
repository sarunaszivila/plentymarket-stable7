<?php
namespace Plenty\Modules\Webshop\Events;


/**
 * Event to trigger validation of a vat number while creating new addresses. Failed validation will throw an exception.
 */
abstract class ValidateVatNumber 
{

	/**
	 * Get the vat number to validate.
	 */
	abstract public function getVatNumber(
	):string;

	/**
	 * Get the country id to validate.
	 */
	abstract public function getCountryId(
	):int;

	/**
	 * Return fallback status for unavailable service.
	 */
	abstract public static function getFallbackStatusServiceUnavailable(
	):float;

}