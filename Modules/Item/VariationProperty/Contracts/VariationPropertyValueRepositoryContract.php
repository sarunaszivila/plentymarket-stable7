<?php
namespace Plenty\Modules\Item\VariationProperty\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\VariationProperty\Models\VariationPropertyValue;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation property value repository
 */
interface VariationPropertyValueRepositoryContract 
{

	/**
	 * Creates a link between a property value and a variation and adds property value data.
	 */
	public function create(
		array $data
	):VariationPropertyValue;

	/**
	 * Gets the data of a property value linked to a variation. The ID of the variation property value and the variation ID must be specified.
	 */
	public function show(
		int $variationId, 
		int $id
	):VariationPropertyValue;

	/**
	 * Updates the data of a variation property linked to a variation. The ID of the variation property value and the variation ID must be specified.
	 */
	public function update(
		array $data, 
		int $variationId, 
		int $id
	):VariationPropertyValue;

	/**
	 * Deletes the link between a property value and a variation. The ID of the variation property value and the variation ID must be specified.
	 */
	public function delete(
		int $variationId, 
		int $id
	):DeleteResponse;

	/**
	 * Deletes all links between a variation and its property values. The ID of the variation must be specified.
	 */
	public function deleteAll(
		int $variationId
	):DeleteResponse;

	/**
	 * Lists the property values linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Creates a list of variation properties.
	 */
	public function createBulk(
		array $data
	):Collection;

	/**
	 * Updates a list of variation properties.
	 */
	public function updateBulk(
		array $data
	):Collection;

}