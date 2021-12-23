<?php
namespace Plenty\Modules\MyView\Contracts;


/**
 * This interface provides methods to create, get, update and delete ViewSets
 */
interface ViewSetPermissionContract 
{

	/**
	 * Search permissions
	 */
	public function search(
		array $searchParams
	);

	/**
	 * Save permissions
	 */
	public function save(
		array $data
	):bool;

	/**
	 * Update given default view set relations.
	 */
	public function updateDefaultViewSetRelation(
		array $relations, 
		string $key
	);

	/**
	 * Update given view set relations.
	 */
	public function updateViewSetRelation(
		array $relations, 
		int $viewSetId
	);

}