<?php
namespace Plenty\Modules\Fulfillment\DataModels;


/**
 * The DSGVO contact data model.
 */
abstract class DSGVOContactData 
{
	
public		$phone;
	
public		$email;
	
public		$isAlternativeEmail;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}