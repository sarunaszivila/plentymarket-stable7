<?php
namespace Plenty\Modules\Market\Ebay\Auth\Contracts;

use Plenty\Modules\Market\Ebay\Auth\Exceptions\AuthException;

/**
 * The contract for the eBay authentication service.
 */
interface AuthServiceContract 
{

	/**
	 * Refresh credentials token and update.
	 */
	public function refreshTokenByCredentialsId(
		int $credentialsId
	);

}