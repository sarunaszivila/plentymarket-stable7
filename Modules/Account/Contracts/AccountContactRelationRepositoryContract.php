<?php
namespace Plenty\Modules\Account\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Models\AccountContactRelation;

/**
 * The AccountContactRelationRepositoryContract is the interface for the account contact relation repository. This interface allows to find and delete an account contact relation.
 */
interface AccountContactRelationRepositoryContract 
{

	/**
	 * Creates a company contact relation. The ID of the account contact relation must be specified. An account is equivalent to a company.
	 */
	public function createCompanyContactRelation(
		array $companyContactRelation
	):AccountContactRelation;

	/**
	 * Gets a company contact relation. The ID of the account contact relation must be specified. An account is equivalent to a company.
	 */
	public function findAccountContactRelationById(
		int $accountContactRelation
	):AccountContactRelation;

	/**
	 * Deletes a company contact relation. The ID of the account contact relation must be specified. An account is equivalent to a company.
	 */
	public function deleteAccountContactRelation(
		int $accountContactRelationId
	):bool;

}