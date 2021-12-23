<?php
namespace Plenty\Modules\Data\History\Models;


/**
 * The data history model
 */
abstract class DataHistory 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$referenceType;
	
public		$referenceId;
	
public		$userId;
	
public		$userName;
	
public		$reference;
	
public		$uuid;
	
public		$dataChangeList;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$ttl;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}