<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Plenty\Modules\Account\Address\Models\AddressOptionType;
use Plenty\Modules\Account\Address\Models\AddressRelationType;

/**
 * The AddressParamConfigurationRepositoryContract is the interface for the address param configuration repository. This interface allows to create, update, delete, list and get address relation types and address option types.
 */
interface AddressParamConfigurationRepositoryContract 
{

	/**
	 * Creates a new address relation type.
	 */
	public function createAddressRelationType(
		array $data
	):AddressRelationType;

	/**
	 * Updates an existing address relation type.
	 */
	public function updateAddressRelationType(
		array $data, 
		int $addressRelationTypeId
	):AddressRelationType;

	/**
	 * Deletes an address relation type by the given ID.
	 */
	public function deleteAddressRelationType(
		int $addressRelationTypeId
	):bool;

	/**
	 * Gets an existing address relation type by the given ID.
	 */
	public function findAddressRelationTypeById(
		int $addressRelationTypeId
	):AddressRelationType;

	/**
	 * Gets a list of address relation types.
	 */
	public function allAddressRelationTypes(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Creates an address option type.
	 */
	public function createAddressOptionType(
		array $data
	):AddressOptionType;

	/**
	 * Updates an existing address option type.
	 */
	public function updateAddressOptionType(
		array $data, 
		int $addressOptionTypeId
	):AddressOptionType;

	/**
	 * Deletes an address option type by the given ID.
	 */
	public function deleteAddressOptionType(
		int $addressOptionTypeId
	):bool;

	/**
	 * Finds an existing address option type by the given ID.
	 */
	public function findAddressOptionTypeById(
		int $addressOptionTypeId
	):AddressOptionType;

	/**
	 * Gets a list of address option types.
	 */
	public function allAddressOptionType(
		array $columns = [], 
		int $perPage = 50
	);

}