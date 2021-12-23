<?php
namespace Plenty\Modules\Order\Shipping\Returns\Models;


/**
 * The ReturnsServiceProvider model.
 */
abstract class ReturnsServiceProvider 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$pluginId;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}