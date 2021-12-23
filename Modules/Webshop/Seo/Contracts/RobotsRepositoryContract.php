<?php
namespace Plenty\Modules\Webshop\Seo\Contracts;

use Plenty\Modules\Webshop\Seo\Models\Robots;

/**
 * Repository to read or write content of the robots.txt
 */
interface RobotsRepositoryContract 
{

	/**
	 * Get the content of the robots.txt for a single webstore.
	 */
	public function findByWebstoreId(
		int $webstoreId
	):Robots;

	/**
	 * Update the content of the robots.txt of a single webstore.
	 */
	public function updateByWebstoreId(
		int $webstoreId, 
		string $data
	):Robots;

}