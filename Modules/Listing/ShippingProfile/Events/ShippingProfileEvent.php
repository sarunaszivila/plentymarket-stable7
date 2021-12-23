<?php
namespace Plenty\Modules\Listing\ShippingProfile\Events;

use Plenty\Modules\Listing\ShippingProfile\Models\ShippingProfile;

/**
 * A base event class for all listing shipping profile events. Each shipping profile event expects an ShippingProfile instance.
 */
abstract class ShippingProfileEvent 
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