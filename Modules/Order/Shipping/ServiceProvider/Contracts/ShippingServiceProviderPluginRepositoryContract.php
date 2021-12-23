<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;


/**
 * The ShippingServiceProviderPluginRepositoryContract is the interface for the shipping service provider plugin repository. This interface allows to list shipping service provider plugins.
 */
interface ShippingServiceProviderPluginRepositoryContract 
{

	/**
	 * Return list of shipping service provider plugins
	 */
	public function plugins(
	);

	/**
	 * Return list of shipping service provider plugins using a filter
	 */
	public function filteredPluginList(
		string $filter
	);

}