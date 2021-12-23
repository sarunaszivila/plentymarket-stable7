<?php
namespace Plenty\Modules\System\Contracts;

use DataFactoryException;

/**
 * Repository for SystemInformation
 */
interface SystemInformationRepositoryContract 
{

	/**
	 * Loads a system information value by key
	 */
	public function loadValue(
		string $key
	);

}