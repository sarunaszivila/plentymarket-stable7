<?php
namespace Plenty\Modules\Webshop\Contracts;


/**
 * Get specific data from webspace objects.
 */
interface WebspaceRepositoryContract 
{

	/**
	 * Get the metadata for a file stored on plentymarkets cdn.
	 */
	public function getCdnMetadata(
		string $url, 
		string $key = null, 
		 $default = null
	);

}