<?php
namespace Plenty\Modules\Board\Models;


/**
 * The board task model.
 */
abstract class BoardTask 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$taskName;
	
public		$description;
	
public		$position;
	
public		$columnId;
	
public		$boardId;
	
public		$tags;
	
public		$references;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}