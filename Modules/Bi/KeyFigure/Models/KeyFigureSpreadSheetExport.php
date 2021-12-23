<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure spread sheet export keeps configuration data for the export of key figure results in a spread sheet document.
 */
abstract class KeyFigureSpreadSheetExport 
{
	
public		$spreadSheetURL;
	
public		$exportMethod;
	
public		$timeInterval;
	
public		$exportColumns;
	
public		$userId;
	
public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}