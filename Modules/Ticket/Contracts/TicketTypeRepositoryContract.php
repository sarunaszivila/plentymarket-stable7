<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketType;

/**
 * The TicketTypeRepositoryContract is the interface for the ticket type repository. This interface allows to update and create ticket types.
 */
interface TicketTypeRepositoryContract 
{

	/**
	 * Updates the ticket type by the given ID.
	 */
	public function update(
		array $data, 
		int $ticketTypeId
	):TicketType;

	/**
	 * Creates a ticket type.
	 */
	public function create(
		array $data
	):TicketType;

}