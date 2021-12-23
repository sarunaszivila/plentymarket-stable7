<?php
namespace Plenty\Modules\Market\Ebay\Api\Services;

use GuzzleHttp\Psr7\Request;
use Plenty\Modules\Market\Credentials\Models\Credentials;
use Plenty\Modules\Market\Ebay\Api\Handlers\HttpHandler;
use Plenty\Modules\Market\Ebay\Api\Helpers\Helper;
use Plenty\Modules\Market\Ebay\Api\Parsers\XmlParser;
use Plenty\Modules\Market\Ebay\Api\Resolvers\ConfigurationResolver;
use Plenty\Modules\Market\Ebay\Api\Types\BaseType;
use Plenty\Modules\Market\Ebay\Auth\Services\AuthService;
use Plenty\Modules\Market\Ebay\Credentials\Contracts\CredentialsContract;
use Plenty\Modules\Market\Ebay\Credentials\Factories\CredentialsFactory;
use Psr\Http\Message\ResponseInterface;

/**
 * The service for making eBay WSDL calls.
 */
abstract class BaseWsdlService 
{

	const HDR_API_TOKEN = 'X-EBAY-API-IAF-TOKEN';

	const HDR_APP_ID = 'X-EBAY-API-APP-NAME';

	const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';

	const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';

	const CRLF = '
';

	public function __construct(
		array $config
	)
	{
		//proxy method
	}

	/**
	 * Returns definitions for each configuration option that is supported.
	 */
	public static function getConfigDefinitions(
	):array
	{
		return null;
	}

	/**
	 * Method to get the service's configuration.
	 */
	public function getConfig(
		string $option = null, 
		 $default = null
	)
	{
		return null;
	}

	/**
	 * Build API request and send.
	 */
	protected function callOperation(
		string $name, 
		BaseType $request, 
		string $responseClass
	):BaseType
	{
		return null;
	}

	/**
	 * Derived classes must implement this method that will build the needed eBay http headers.
	 */
	abstract protected function getEbayHeaders(
		string $operationName
	):array;

}