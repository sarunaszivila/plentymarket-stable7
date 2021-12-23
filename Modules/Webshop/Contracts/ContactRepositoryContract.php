<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * Repository to get and set contact information for the webshop
 */
interface ContactRepositoryContract 
{

	/**
	 * Get the ID of the logged in contact or 0 for guests
	 */
	public function getContactId(
	):int;

	/**
	 * Get the logged in contact
	 */
	public function getContact(
	):Contact;

	/**
	 * Get the contact class ID of the logged in contact
	 */
	public function getContactClassId(
	):int;

	/**
	 * Get the contact class data for the provided contact class ID
	 */
	public function getContactClassData(
		int $contactClassId
	):array;

	/**
	 * Get the default contact class ID of the webstore
	 */
	public function getDefaultContactClassId(
	):int;

	/**
	 * Get Information if net prices should be shown
	 */
	public function showNetPrices(
	):bool;

}