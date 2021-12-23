<?php
namespace Plenty\Modules\Wizard\Contracts;

use Plenty\Modules\Wizard\Models\Wizard;

/**
 * This interface provides methods to register, get and list all wizards.
 */
interface WizardContainerContract 
{

	/**
	 * Register a wizard
	 */
	public function register(
		string $wizardKey, 
		string $wizard
	);

	/**
	 * Register a wizard folder
	 */
	public function registerFolders(
		string $folderClass
	);

	/**
	 * Get a single wizard by its key
	 */
	public function get(
		string $wizardKey, 
		bool $skipTranslation = false
	):Wizard;

	/**
	 * List all wizards class names
	 */
	public function all(
	):array;

	/**
	 * List all wizard folders
	 */
	public function folders(
		bool $hierarchy = false
	):array;

}