<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContactGroupFunctionsRepositoryContract is the interface for the contact account group function repository. This interface allows to execute a group function call and get group function related data.
 */
interface ContactGroupFunctionsRepositoryContract 
{

	public function loadGroupFunctions(
	):array;

	public function executeGroupFunction(
		array $contactList = [], 
		int $addressLabelTemplate = null, 
		int $emailTemplate = null, 
		int $newsletter = null
	):array;

	public function executeGroupFunctionV2(
		array $data = []
	):array;

}