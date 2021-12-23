<?php
namespace Plenty\Modules\Wizard\Services;


/**
 * Register a wizard.
 */
abstract class WizardProvider 
{

	abstract protected function structure(
	):array;

}