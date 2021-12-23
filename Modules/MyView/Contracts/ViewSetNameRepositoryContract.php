<?php
namespace Plenty\Modules\MyView\Contracts;


/**
 * This interface provides a method to update ViewSetNames
 */
interface ViewSetNameRepositoryContract 
{

	/**
	 * Update given view set name.
	 */
	public function updateViewSetName(
		string $name, 
		int $id
	);

}