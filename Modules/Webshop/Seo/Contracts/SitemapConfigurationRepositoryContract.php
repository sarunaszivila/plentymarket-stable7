<?php
namespace Plenty\Modules\Webshop\Seo\Contracts;

use Plenty\Modules\Webshop\Seo\Models\SitemapConfiguration;

/**
 * Repository for sitemap configuration
 */
interface SitemapConfigurationRepositoryContract 
{

	/**
	 * Get the sitemap configuration of a single webstore.
	 */
	public function findByWebstoreId(
		int $webstoreId
	):SitemapConfiguration;

	/**
	 * Update the sitemap configuration of a single webstore.
	 */
	public function updateByWebstoreId(
		int $webstoreId, 
		array $data = []
	):SitemapConfiguration;

}