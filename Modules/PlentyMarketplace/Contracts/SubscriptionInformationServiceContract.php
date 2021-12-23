<?php
namespace Plenty\Modules\PlentyMarketplace\Contracts;

use Plenty\Modules\PlentyMarketplace\Models\SubscriptionOrderInformation;

/**
 * Get information about plugin subscriptions. Only suitable for subscription plugins.
 */
interface SubscriptionInformationServiceContract 
{

	/**
	 * Takes the Name of a subscription plugin and returns true if the subscription has been paid for
in the current payment period on the current system.
	 */
	public function isPaid(
		string $pluginName
	):bool;

	/**
	 * Takes the Name of a subscription plugin and returns information about the subscription.
	 */
	public function getSubscriptionInfo(
		string $pluginName
	):SubscriptionOrderInformation;

}