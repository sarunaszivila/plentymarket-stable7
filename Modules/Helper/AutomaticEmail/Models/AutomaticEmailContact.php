<?php
namespace Plenty\Modules\Helper\AutomaticEmail\Models;


/**
 * The automatic email data for contact type emails.
 */
abstract class AutomaticEmailContact 
{

	const EMAIL_TYPE_ORDER = 1;

	const EMAIL_TYPE_CONTACT = 2;

	const EMAIL_TYPE_OPTIN = 9;

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}