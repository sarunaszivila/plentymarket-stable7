<?php
namespace Plenty\Modules\Amazon\Contracts;


interface AmazonClientFactory 
{

	public function getClient(
		int $accountId, 
		string $endpointPath
	):AmazonClient;

}