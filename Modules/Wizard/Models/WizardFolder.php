<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard folder.
 */
abstract class WizardFolder 
{
	
public		$name;
	
public		$priority;
	
public		$shortDescription;
	
public		$parent;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}