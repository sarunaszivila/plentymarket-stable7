<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketRoleName;

/**
 * The TicketRoleNameRepositoryContract is the interface for the ticket role name repository. This interface allows to update, create and list ticket role names.
 */
interface TicketRoleNameRepositoryContract 
{

	/**
	 * Updates an existing ticket role name.
	 */
	public function update(
		array $data, 
		int $ticketRoleNameId
	):TicketRoleName;

	/**
	 * Creates a ticket role name.
	 */
	public function create(
		array $data
	):TicketRoleName;

	/**
	 * Lists the ticket roles by the name.
	 */
	public function findByName(
		string $name, 
		string $lang
	):array;

	/**
	 * Lists the ticket roles by the language.
	 */
	public function findByLang(
		string $lang
	):array;

}