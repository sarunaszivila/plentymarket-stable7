<?php
namespace Plenty\Modules\EventProcedures\Events;

use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Ticket\Models\Ticket;

/**
 * plentymarkets event procedures triggered
 */
abstract class EventProceduresTriggered 
{

	/**
	 * Gets the ticket.
	 */
	abstract public function getTicket(
	):Ticket;

	/**
	 * Gets the order
	 */
	abstract public function getOrder(
	):Order;

}