<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure target day model contains the target figures for each weekday, week, month, quarter and year, which were stored for a key figure configuration
 */
abstract class KeyFigureTarget 
{
	
public		$d1;
	
public		$d2;
	
public		$d3;
	
public		$d4;
	
public		$d5;
	
public		$d6;
	
public		$d7;
	
public		$w;
	
public		$m1;
	
public		$m2;
	
public		$m3;
	
public		$m4;
	
public		$m5;
	
public		$m6;
	
public		$m7;
	
public		$m8;
	
public		$m9;
	
public		$m10;
	
public		$m11;
	
public		$m12;
	
public		$q1;
	
public		$q2;
	
public		$q3;
	
public		$q4;
	
public		$yl;
	
public		$y;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}