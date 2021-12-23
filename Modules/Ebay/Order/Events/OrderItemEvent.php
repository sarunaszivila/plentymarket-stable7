<?php
namespace Plenty\Modules\Market\Ebay\Order\Events;


/**
 * Generic ebay order item event.
 */
abstract class OrderItemEvent 
{

	abstract public function getData(
	);

	abstract public function getWarehouseId(
	);

	abstract public function setWarehouseId(
		int $warehouseId
	);

}