<?php
namespace Plenty\Modules\Ticket\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Ticket\Models\Ticket;
use Plenty\Modules\Ticket\Models\TicketMessage;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The TicketRepositoryContract is the interface for the ticket repository. This interface allows to list tickets by filters.
 */
interface TicketRepositoryContract 
{

	/**
	 * Creates a new ticket.
	 */
	public function createTicket(
		array $data
	):Ticket;

	/**
	 * List tickets by filter options.
	 */
	public function searchTickets(
		array $filter, 
		int $page = 1, 
		int $itemsPerPage = 50
	):array;

	/**
	 * Deletes a ticket by the ID.
	 */
	public function deleteTicket(
		int $ticketId
	);

	/**
	 * Creates a message for a ticket.
	 */
	public function createMessage(
		array $data, 
		int $ticketId
	):TicketMessage;

	/**
	 * Updates an existing ticket with given data.
	 */
	public function updateTicket(
		array $data, 
		int $ticketId
	):Ticket;

	/**
	 * Gets a ticket by the ID.
	 */
	public function findById(
		int $ticketId, 
		array $with = []
	):Ticket;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}