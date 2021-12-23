<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard step model.
 */
abstract class WizardStep 
{
	
public		$title;
	
public		$description;
	
public		$modifierClass;
	
public		$validationClass;
	
public		$sections;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}