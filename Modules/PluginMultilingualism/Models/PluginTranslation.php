<?php
namespace Plenty\Modules\PluginMultilingualism\Models;


/**
 * The plugin translation model.
 */
abstract class PluginTranslation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$pluginSetId;
	
public		$pluginName;
	
public		$languageCode;
	
public		$fileName;
	
public		$key;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$deletedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}