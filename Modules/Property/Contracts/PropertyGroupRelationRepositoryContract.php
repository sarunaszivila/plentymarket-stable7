<?php
namespace Plenty\Modules\Property\Contracts;


/**
 * This interface allows you to link or unlink properties with a property group.
 */
interface PropertyGroupRelationRepositoryContract 
{

	/**
	 * Links a property to a property group.
	 */
	public function link(
		int $propertyId, 
		int $propertyGroupId
	):bool;

	/**
	 * Unlinks a property to a property group.
	 */
	public function unlink(
		int $propertyId, 
		int $propertyGroupId
	):bool;

}