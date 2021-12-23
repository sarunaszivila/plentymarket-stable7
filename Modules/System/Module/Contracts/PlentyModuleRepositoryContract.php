<?php
namespace Plenty\Modules\System\Module\Contracts;


/**
 * Repository for PlentyModule
 */
interface PlentyModuleRepositoryContract 
{

	/**
	 * Returns whether or not a given module is active
	 */
	public function isActive(
		string $module
	):bool;

	/**
	 * Returns whether or not a given module is hidden
	 */
	public function isHidden(
		string $module
	):bool;

	/**
	 * Get the 'quantity' attribute of the given module
	 */
	public function getQuantity(
		string $module
	):int;

	/**
	 * Get any value for any module
	 */
	public function getValueForModule(
		string $module, 
		string $value
	);

}