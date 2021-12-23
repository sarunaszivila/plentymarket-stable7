<?php
namespace Plenty\Modules\Webshop\Template\Contracts;


/**
 * Register required assets for the frontend.
 */
interface AssetRepositoryContract 
{

	/**
	 * Add a path to an asset that should be pushed to the client using HTTP2 server push
	 */
	public function addAsset(
		string $path, 
		string $as = "", 
		string $rel = "preload", 
		array $additionalParams = []
	);

}