<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the referrer id  is changed in the online store.
 */
abstract class FrontendReferrerChanged 
{

	/**
	 * Get the ID of the changed referrer
	 */
	abstract public function getReferrerId(
	);

	/**
	 * Set the ID of the changed referrer
	 */
	abstract public function setReferrerId(
		 $referrerId
	):FrontendReferrerChanged;

}