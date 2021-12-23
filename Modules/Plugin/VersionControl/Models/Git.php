<?php
namespace Plenty\Modules\Plugin\VersionControl\Models;


/**
 * Model holding plugin data concerning Git version control.
 */
abstract class Git 
{

	const DEFAULT_ITEMS_PER_PAGE = 10;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$pluginId;
	
public		$username;
	
public		$password;
	
public		$remoteUrl;
	
public		$branch;
	
public		$autoFetch;
	
public		$webhookToken;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$plugin;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}