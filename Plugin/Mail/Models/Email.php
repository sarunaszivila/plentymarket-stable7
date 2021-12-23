<?php
namespace Plenty\Plugin\Mail\Models;


/**
 * the email model.
 */
abstract class Email 
{
	
public		$bccAddresses;
	
public		$ccAddresses;
	
public		$toAddresses;
	
public		$senderAddress;
	
public		$replyToAddresses;
	
public		$subject;
	
public		$htmlBody;
	
public		$plainTextBody;
	
public		$rawMessage;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}