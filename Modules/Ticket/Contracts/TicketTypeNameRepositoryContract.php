<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketTypeName;

/**
 * The TicketTypeNameRepositoryContract is the interface for the ticket type name repository. This interface allows to update, create and list ticket type names.
 */
interface TicketTypeNameRepositoryContract 
{

	/**
	 * Updates an existing ticket type name.
	 */
	public function update(
		array $data, 
		int $ticketTypeNameId
	):TicketTypeName;

	/**
	 * Creates a ticket type name.
	 */
	public function create(
		array $data
	):TicketTypeName;

	/**
	 * Lists the ticket types by the name.
	 */
	public function findByName(
		string $name, 
		string $lang
	):array;

	/**
	 * Lists the ticket types by the language.
	 */
	public function typeNameList(
		string $lang
	):array;

}