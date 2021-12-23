<?php
namespace Plenty\Modules\PlentyMarketplace\Contracts;


/**
 * Get information about purchases on marketplace.
 */
interface MarketplacePurchaseInformationContract 
{

	/**
	 * Takes the Name of a plugin and returns true if the plugin has been paid for.
	 */
	public function isPaid(
		string $pluginName
	):bool;

}