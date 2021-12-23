<?php
namespace Plenty\Modules\Amazon\Contracts;

use Plenty\Modules\Account\Address\Models\Address;

/**
 * AmazonFulfillmentCenterRepository
 */
interface AmazonFulfillmentCenterRepositoryContract 
{

	/**
	 * Lists amazon fulfilment centers delivery addresses.
	 */
	public function getDeliveryAddresses(
	):array;

	/**
	 * Get the delivery address by fulfillment center ID.
	 */
	public function getDeliveryAddressByFulfillmentCenterId(
		string $amazonFulfillmentCenterId
	):Address;

	/**
	 * Get the delivery address by GLN.
	 */
	public function getDeliveryAddressByGLN(
		string $GLN
	):Address;

	/**
	 * Get the invoice address by GLN.
	 */
	public function getInvoiceAddressByGLN(
		string $GLN
	):Address;

	public function getContactId(
	):int;

}