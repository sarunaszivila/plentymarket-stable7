<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard step section model.
 */
abstract class WizardSection 
{
	
public		$title;
	
public		$description;
	
public		$form;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}