<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageTo model of the messenger.
 */
abstract class MessageTo 
{
	
public		$user;
	
public		$role;
	
public		$email;
	
public		$allUsers;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}