<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContactClassRepositoryContract is the interface for the contact class repository. This interface allows to list all contact classes or to get a contact class by the ID.
 */
interface ContactClassRepositoryContract 
{

	/**
	 * Gets a contact class. The ID of the contact class must be specified.
	 */
	public function findContactClassById(
		int $contactClassId
	):string;

	/**
	 * Gets the data of a contact class. The ID of the contact class must be specified.
	 */
	public function findContactClassDataById(
		int $contactClassId
	):array;

	/**
	 * Lists contact classes.
	 */
	public function allContactClasses(
	):array;

}