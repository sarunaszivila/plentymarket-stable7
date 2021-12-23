<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard form option.
 */
abstract class WizardFormOption 
{
	
public		$name;
	
public		$placeholder;
	
public		$caption;
	
public		$label;
	
public		$tooltip;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}