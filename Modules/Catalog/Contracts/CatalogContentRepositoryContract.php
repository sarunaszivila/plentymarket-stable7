<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;

/**
 * The CatalogContentRepositoryContract is the interface for the catalogue content repository. This interface allows to read and update a catalogue's content. The content contains the specific catalogue data that is used in the exports.
 */
interface CatalogContentRepositoryContract 
{

	/**
	 * Returns the content of the catalogue.
	 */
	public function get(
		string $id
	):array;

	/**
	 * Updates the content of the catalogue.
	 */
	public function update(
		string $id, 
		array $data
	):array;

}