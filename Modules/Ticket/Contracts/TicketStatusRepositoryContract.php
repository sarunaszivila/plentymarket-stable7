<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketStatus;

/**
 * The TicketStatusRepositoryContract is the interface for the ticket status repository. This interface allows to update, create and list ticket statuses.
 */
interface TicketStatusRepositoryContract 
{

	/**
	 * Updates an existing ticket status.
	 */
	public function update(
		array $data, 
		int $ticketStatusId
	):TicketStatus;

	/**
	 * Creates a ticket status.
	 */
	public function create(
		array $data
	):TicketStatus;

	/**
	 * Lists the ticket statuses by the type ID.
	 */
	public function findByTypeId(
		int $typeId
	):array;

}