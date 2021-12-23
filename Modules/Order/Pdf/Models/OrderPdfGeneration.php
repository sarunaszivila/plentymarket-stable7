<?php
namespace Plenty\Modules\Order\Pdf\Models;


/**
 * The OrderPdfGeneration Model
 */
abstract class OrderPdfGeneration 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$language;
	
public		$advice;
	
public		$sums;
	
public		$link;
	
public		$image;
	
public		$imageHeight;
	
public		$imageWidth;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}