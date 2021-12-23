<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Legacy\Repositories\Fulfillment\Shipping\LegacyFulfillmentShippingRepository;
use Plenty\Modules\Helper\Contracts\KeyValueStorageRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;

/**
 * The GetDhlRetoureOnlineDataService is the service that retrieves old DHL Retoure Online data.
 */
abstract class GetDhlRetoureOnlineDataService 
{

	/**
	 * Get all DHL Retoure Online configurations
	 */
	abstract public function getDhlRetoureOnlineData(
	);

}