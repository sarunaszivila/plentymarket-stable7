<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket document model.
 */
abstract class TicketDocument 
{

	const CREATED_AT = 'inserted';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$ticketId;
	
public		$userId;
	
public		$type;
	
public		$name;
	
public		$internal;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}