<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * lookup repository for contacts
 */
interface ContactLookupRepositoryContract 
{

	public function hasId(
		int $contactId
	):ContactLookupRepositoryContract;

	public function hasEmail(
		string $emailAddress
	):ContactLookupRepositoryContract;

	public function hasBillingAddress(
		int $billingAddressId
	):ContactLookupRepositoryContract;

	public function hasDeliveryAddress(
		int $deliveryAddressId
	):ContactLookupRepositoryContract;

	public function lookup(
	):array;

}