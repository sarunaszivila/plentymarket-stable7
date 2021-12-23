<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Contracts;


/**
 * The ParcelServiceConstraintRepositoryContract is the interface for the parcel service constraint type repository.
 */
interface ParcelServiceConstraintRepositoryContract 
{

	/**
	 * Create a new parcel service constraint entry
	 */
	public function create(
		array $data
	);

	/**
	 * Fetch parcel service constraint by ID
	 */
	public function getById(
		int $id
	);

	/**
	 * Delete a parcel service constant by ID
	 */
	public function delete(
		int $id
	);

}