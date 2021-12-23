<?php
namespace Plenty\Modules\Frontend\Services;


/**
 * Frontend-service for system information
 */
abstract class SystemService 
{

	/**
	 * Get the plenty ID of the current client.
	 */
	abstract public function getPlentyId(
	):int;

	/**
	 * get the webstore ID of the current client.
	 */
	abstract public function getWebstoreId(
	):int;

}