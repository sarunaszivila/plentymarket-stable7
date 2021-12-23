<?php
namespace Plenty\Modules\Wizard\Services;


/**
 * Register a wizard folder.
 */
abstract class WizardFolderProvider 
{

	abstract protected function folders(
	):array;

}