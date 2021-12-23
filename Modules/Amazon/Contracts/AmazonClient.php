<?php
namespace Plenty\Modules\Amazon\Contracts;


/**
 * The amazon client
 */
interface AmazonClient 
{

	public function sendRequest(
		AmazonClientRequest $request, 
		string $serviceVersion
	):AmazonClientResponse;

}