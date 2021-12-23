<?php
namespace Plenty\Modules\CustomerContract\Models;


/**
 * The customer contract model
 */
abstract class Signing 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$contractId;
	
public		$contactId;
	
public		$signerName;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}