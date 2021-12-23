<?php
namespace Plenty\Plugin\Mail\Models;


/**
 * the credential model for AWS SES client.
 */
abstract class AwsSesCredentials 
{
	
public		$region;
	
public		$accessKeyId;
	
public		$secretAccessKey;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}