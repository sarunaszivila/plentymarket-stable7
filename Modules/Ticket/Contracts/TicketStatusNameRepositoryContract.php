<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketStatusName;

/**
 * The TicketStatusNameRepositoryContract is the interface for the ticket status names. This interface allows to update, create and list ticket status names.
 */
interface TicketStatusNameRepositoryContract 
{

	/**
	 * Updates the ticket status name by the given ID.
	 */
	public function update(
		array $data, 
		int $ticketStatusNameId
	):TicketStatusName;

	/**
	 * Creates a ticket status name.
	 */
	public function create(
		array $data
	):TicketStatusName;

	/**
	 * Gets the ticket status name.
	 */
	public function findByName(
		string $name, 
		string $lang
	):array;

	public function statusNameList(
		string $lang
	):array;

	/**
	 * Lists the ticket status names with type ID.
	 */
	public function statusNameListWithTypeId(
		string $lang
	):array;

}