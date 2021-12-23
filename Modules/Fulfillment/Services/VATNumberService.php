<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Modules\BasicAssistant\Services\CompanyConfigurationService;
use Plenty\Modules\Fulfillment\DataModels\VATNumberData;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Legacy\Services\Tax\OrderTaxInformation;
use Plenty\Modules\Order\Legacy\Services\Tax\TaxDeterminerFactory;
use Plenty\Modules\Order\Property\Contracts\OrderPropertyRepositoryContract;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;

/**
 * The VATNumberService is the service for providing the correct VAT ID.
 */
abstract class VATNumberService 
{

	abstract public function getVATNumber(
		int $orderId
	):VATNumberData;

}