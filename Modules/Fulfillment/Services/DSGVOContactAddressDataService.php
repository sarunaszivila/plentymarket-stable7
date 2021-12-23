<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Modules\Account\Address\Models\AddressRelationType;
use Plenty\Modules\Fulfillment\DataModels\DSGVOContactData;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Property\Contracts\OrderPropertyRepositoryContract;
use Plenty\Modules\Order\Property\Models\OrderProperty;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;
use Plenty\Modules\Order\Shipping\ParcelService\Models\ParcelServicePreset;

/**
 * The DSGVOContactAddressDataService is the service for generating contact address data according to DSGVO settings.
 */
abstract class DSGVOContactAddressDataService 
{

	abstract public static function getDSGVOAddressData(
		int $addressType, 
		Order $order
	):array;

}