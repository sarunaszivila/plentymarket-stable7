<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Plenty\Modules\Account\Contact\Models\ContactDepartment;
use Plenty\Modules\Account\Contact\Models\ContactOptionSubType;
use Plenty\Modules\Account\Contact\Models\ContactOptionType;
use Plenty\Modules\Account\Contact\Models\ContactPosition;

/**
 * The ContactParamConfigurationContract is the interface for the contact param configuration repository. This interface allows to create, update, delete, list and get contact positions, contact departments, contact option types and and contact option sub-types.
 */
interface ContactParamConfigurationContract 
{

	/**
	 * Creates a contact position.
	 */
	public function createContactPosition(
		array $data
	):ContactPosition;

	/**
	 * Updates an existing contact position.
	 */
	public function updateContactPosition(
		array $data, 
		int $contactPositionId
	):ContactPosition;

	/**
	 * Deletes a contact position by the given ID.
	 */
	public function deleteContactPosition(
		int $contactPositionId
	):bool;

	/**
	 * Finds an existing contact position by the given ID.
	 */
	public function findContactPositionById(
		int $contactPositionId
	):ContactPosition;

	/**
	 * Gets a list of contact positions.
	 */
	public function allContactPositions(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Creates a contact department.
	 */
	public function createContactDepartment(
		array $data
	):ContactDepartment;

	/**
	 * Updates an existing contact department.
	 */
	public function updateContactDepartment(
		array $data, 
		int $contactDepartmentId
	):ContactDepartment;

	/**
	 * Deletes a contact department by the given ID.
	 */
	public function deleteContactDepartment(
		int $contactDepartmentId
	):bool;

	/**
	 * Finds an existing contact department by the given ID.
	 */
	public function findContactDepartmentById(
		int $contactDepartmentId
	):ContactDepartment;

	/**
	 * Gets a list of contact departments.
	 */
	public function allContactDepartments(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Creates a contact option type.
	 */
	public function createContactOptionType(
		array $data
	):ContactOptionType;

	/**
	 * Updates an existing contact option type.
	 */
	public function updateContactOptionType(
		array $data, 
		int $contactOptionTypeId
	):ContactOptionType;

	/**
	 * Deletes a contact option type by the given ID.
	 */
	public function deleteContactOptionType(
		int $contactOptionTypeId
	):bool;

	/**
	 * Finds an existing contact option type by the given ID.
	 */
	public function findContactOptionTypeById(
		int $contactOptionTypeId
	):ContactOptionType;

	/**
	 * Gets a list of contact option types.
	 */
	public function allContactOptionType(
		array $columns = [], 
		int $perPage = 50, 
		array $with = []
	);

	/**
	 * Creates a contact option sub-type.
	 */
	public function createContactOptionSubType(
		array $data
	):ContactOptionSubType;

	/**
	 * Updates an existing contact option sub-type.
	 */
	public function updateContactOptionSubType(
		array $data, 
		int $contactOptionSubTypeId
	):ContactOptionSubType;

	/**
	 * Deletes a contact option sub-type by the given ID.
	 */
	public function deleteContactOptionSubType(
		int $contactOptionSubTypeId
	):bool;

	/**
	 * Finds an existing contact option sub-type by the given ID.
	 */
	public function findContactOptionSubTypeById(
		int $contactOptionSubTypeId
	):ContactOptionSubType;

	/**
	 * Gets a list of contact option sub-types.
	 */
	public function allContactOptionSubType(
		array $columns = [], 
		int $perPage = 50
	);

}