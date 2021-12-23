<?php
namespace Plenty\Modules\Helper\AutomaticEmail\Contracts;

use Plenty\Modules\Helper\AutomaticEmail\Models\AutomaticEmail;

/**
 * This service provides a method to initiate the automatic email delivery.
 */
interface AutomaticEmailContract 
{

	/**
	 * Send the automatic email.
	 */
	public function sendAutomatic(
		AutomaticEmail $email
	):bool;

}