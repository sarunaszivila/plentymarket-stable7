<?php
namespace Plenty\Modules\Order\Shipping\Returns\Services;

use Plenty\Modules\Document\Contracts\DocumentRepositoryContract;
use Plenty\Modules\Document\Models\Document;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Legacy\Services\LegacyOrderEventService;
use Plenty\Modules\Order\Shipping\Returns\Models\OrderReturns;
use Plenty\Modules\Order\Shipping\Returns\Models\RegisterOrderReturnsResponse;
use Plenty\Modules\Order\Shipping\Returns\Models\RegisterReturnsResult;
use Plenty\Modules\Order\Shipping\Returns\Services\Entries\ReturnsServiceProviderEntry;

/**
 * The RegisterReturnsService class offers the possibility to register returns, get returns label and persist returns label.
 */
abstract class RegisterReturnsService 
{

	const ORDER_RETURNS = 3;

	/**
	 * Register returns for each order ID
	 */
	abstract public function registerReturns(
		string $pluginName, 
		array $orderIds
	):RegisterReturnsResult;

	/**
	 * Save the return label in base64
	 */
	abstract public function persistLabel(
		string $labelBase64, 
		OrderReturns $returns
	):Document;

	/**
	 * Get the return label
	 */
	abstract public function getLabel(
		OrderReturns $orderReturns
	):string;

}