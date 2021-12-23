<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketRole;

/**
 * The TicketRoleRepositoryContract is the interface for the ticket role repository. This interface allows to update and create ticket roles.
 */
interface TicketRoleRepositoryContract 
{

	/**
	 * Update an existing ticket role.
	 */
	public function update(
		array $data, 
		int $ticketRoleId
	):TicketRole;

	/**
	 * Creates a ticket role.
	 */
	public function create(
		array $data
	):TicketRole;

}