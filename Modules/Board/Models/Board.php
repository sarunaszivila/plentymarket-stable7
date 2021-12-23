<?php
namespace Plenty\Modules\Board\Models;


/**
 * The board model.
 */
abstract class Board 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$boardName;
	
public		$boardColumns;
	
public		$columnsCount;
	
public		$tasksCount;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}