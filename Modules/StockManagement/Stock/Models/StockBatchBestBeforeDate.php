<?php
namespace Plenty\Modules\StockManagement\Stock\Models;


/**
 * The stock batch best before date model contains all information about the batch and best before date.
 */
abstract class StockBatchBestBeforeDate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$batch;
	
public		$bestBeforeDate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}