<?php
namespace Plenty\Modules\Wizard\Contracts;


/**
 * This interface provides methods to modify wizard data.
 */
interface WizardDataModifier 
{

	/**
	 * Modify a wizard data for a step
	 */
	public function modify(
		array $parameters
	);

}