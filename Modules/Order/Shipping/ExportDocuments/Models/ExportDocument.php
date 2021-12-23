<?php
namespace Plenty\Modules\Order\Shipping\ExportDocuments\Models;


/**
 * The Export Document model
 */
abstract class ExportDocument 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$orderId;
	
public		$packageNumber;
	
public		$base64Content;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}