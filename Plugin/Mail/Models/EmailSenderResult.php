<?php
namespace Plenty\Plugin\Mail\Models;


/**
 * the email sender result model.
 */
abstract class EmailSenderResult 
{
	
public		$messageId;
	
public		$message;
	
public		$errorCode;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}