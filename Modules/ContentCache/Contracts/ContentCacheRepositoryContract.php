<?php
namespace Plenty\Modules\ContentCache\Contracts;


/**
 * Save and retrieve values to or from the content cache
 */
interface ContentCacheRepositoryContract 
{

	/**
	 * Enable content caching for current response so next request on this resource will be delivered from content cache.
	 */
	public function enableCacheForResponse(
		array $options = []
	);

	/**
	 * Disable caching for current response because of any unwanted behavior.
	 */
	public function disableCacheForResponse(
		string $reason = ""
	);

	/**
	 * Link variations to current response.
	 */
	public function linkVariationsToResponse(
		array $variationIds
	);

}