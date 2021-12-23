<?php
namespace Plenty\Modules\MyView\Contracts;


/**
 * This interface provides methods to create, get, update and delete ViewSets
 */
interface ViewSetRepositoryContract 
{

	/**
	 * Search the list of view sets.
	 */
	public function search(
		array $searchParams
	);

	/**
	 * Get given view set.
	 */
	public function get(
		int $id
	);

	/**
	 * Create given view set.
	 */
	public function create(
		array $data
	);

	/**
	 * Update given view set.
	 */
	public function update(
		int $id, 
		array $data
	);

	/**
	 * Delete given view set.
	 */
	public function delete(
		int $id
	);

	/**
	 * Set the given view set active by user id
	 */
	public function setActive(
		int $userId, 
		int $viewSetId, 
		string $viewSetKey
	);

}