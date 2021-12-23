<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * Event to validate the complete checkout
 */
abstract class ValidateCheckoutEvent 
{

	/**
	 * Get a list of error keys.
	 */
	abstract public function getErrorKeysList(
	):array;

	/**
	 * Add an error key to the list.
	 */
	abstract public function addErrorKey(
		string $errorKey
	):self;

}