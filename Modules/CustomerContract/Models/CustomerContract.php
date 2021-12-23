<?php
namespace Plenty\Modules\CustomerContract\Models;


/**
 * The customer contract model
 */
abstract class CustomerContract 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$contractLang;
	
public		$contractName;
	
public		$contractVisible;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}