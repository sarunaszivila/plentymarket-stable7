<?php
namespace Plenty\Modules\Listing\ShippingProfile\Events;

use Plenty\Modules\Listing\ShippingProfile\Models\ShippingProfile;

/**
 * An event class fired after a listing shipping profile is deleted.
 */
abstract class ShippingProfileDeleted extends \Plenty\Modules\Listing\ShippingProfile\Events\ShippingProfileEvent 

{

	public function __construct(
		ShippingProfile $shippingProfile
	)
	{
		return null;
	}

	/**
	 * Get the ShippingProfile instance.
	 */
	public function getShippingProfile(
	):ShippingProfile
	{
		return null;
	}

}