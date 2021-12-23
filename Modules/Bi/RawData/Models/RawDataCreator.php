<?php
namespace Plenty\Modules\BI\RawData\Models;


/**
 * The BI raw data creator model
 */
abstract class RawDataCreator 
{
	
public		$dataName;
	
public		$fileFormat;
	
public		$limitPage;
	
public		$limitDay;
	
public		$earliestPossibleDataDate;
	
public		$filterType;
	
public		$dataUpdatedAtColumnName;
	
public		$defaultActive;
	
public		$interval;
	
public		$storableFromPlan;
	
public		$processableFromPlan;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}