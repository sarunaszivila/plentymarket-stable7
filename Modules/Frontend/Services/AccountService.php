<?php
namespace Plenty\Modules\Frontend\Services;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * Frontend-service for customer information
 */
abstract class AccountService 
{

	/**
	 * Get the information if an account is currently logged in.
	 */
	abstract public function getIsAccountLoggedIn(
	):bool;

	/**
	 * Get the ID of the currently logged in account.
	 */
	abstract public function getAccountContactId(
	):int;

}