<?php
namespace Plenty\Modules\Wizard\Contracts;


/**
 * This interface provides methods to handle final wizard data.
 */
interface WizardSettingsHandler 
{

	/**
	 * Handle wizard data for a finalized wizard
	 */
	public function handle(
		array $parameters
	):bool;

}