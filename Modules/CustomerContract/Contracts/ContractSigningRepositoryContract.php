<?php
namespace Plenty\Modules\CustomerContract\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\CustomerContract\Models\Signing;

/**
 * This interface provides methods to digital sign contracts
 */
interface ContractSigningRepositoryContract 
{

	/**
	 * Sign a contract
	 */
	public function signContract(
		string $contractId, 
		string $signerName
	):Signing;

	/**
	 * Returns signing of a contract
	 */
	public function getSigning(
		string $contractId
	):Signing;

	/**
	 * Download the signed contract document
	 */
	public function signedDocument(
		string $contractId
	);

}