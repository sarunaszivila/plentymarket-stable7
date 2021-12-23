<?php
namespace Plenty\Modules\Market\Ebay\Order\Events;


/**
 * Event which signals a new ebay order item before its creation.
 */
abstract class BeforeNewOrderItemCreationEvent 
{

	abstract public function getData(
	);

	abstract public function getWarehouseId(
	);

	abstract public function setWarehouseId(
		int $warehouseId
	);

}