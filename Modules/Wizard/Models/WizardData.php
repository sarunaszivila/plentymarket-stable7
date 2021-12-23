<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard data model.
 */
abstract class WizardData 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$uuid;
	
public		$plentyIdHash;
	
public		$wizardKey;
	
public		$data;
	
public		$steps;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}