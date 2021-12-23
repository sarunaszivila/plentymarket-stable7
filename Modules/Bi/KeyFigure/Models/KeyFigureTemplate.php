<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure template model contains preview data of a key figure template
 */
abstract class KeyFigureTemplate 
{
	
public		$keyFigureName;
	
public		$keyFigure;
	
public		$className;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}