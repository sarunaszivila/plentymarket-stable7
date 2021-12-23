<?php
namespace Plenty\Modules\Board\Models;


/**
 * The task reference model.
 */
abstract class BoardTaskReference 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$taskId;
	
public		$referenceValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}