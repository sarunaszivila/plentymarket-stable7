<?php
namespace Plenty\Modules\Helper\AutomaticEmail\Models;


/**
 * The abstract base class for all automatic email data. Provides constants for the email type to be used.
 */
abstract class AutomaticEmailData 
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