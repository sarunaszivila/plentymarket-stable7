<?php
namespace Plenty\Modules\System\Models;


/**
 * The webstore model appending the WebstoreConfiguration
 */
abstract class Webstore 
{

	const TYPE_PLENTYMARKETS = 'plentymarkets';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$type;
	
public		$storeIdentifier;
	
public		$configuration;
	
public		$locations;
	
public		$pluginSet;
	
public		$pluginSetId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}