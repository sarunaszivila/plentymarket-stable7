<?php
namespace Plenty\Modules\Board\Models;


/**
 * The board column model.
 */
abstract class BoardColumn 
{
	
public		$id;
	
public		$boardId;
	
public		$columnName;
	
public		$position;
	
public		$tasks;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}