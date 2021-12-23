<?php
namespace Plenty\Modules\EventProcedures\Services\Entries;


/**
 * The procedure entry contains all information needed to use module procedures in plentymarkets event procedures.
 */
abstract class ProcedureEntry 
{

	const EVENT_TYPE_ORDER = 'order';

	const EVENT_TYPE_REORDER = 'reorder';

	const EVENT_TYPE_TICKET = 'ticket';

	const PROCEDURE_GROUP_ITEM = 'item';

	const PROCEDURE_GROUP_ORDER = 'order';

	const PROCEDURE_GROUP_DOCUMENT = 'document';

	const PROCEDURE_GROUP_CONTACT = 'contact';

	const PROCEDURE_GROUP_SHIPPING = 'shipping';

	const PROCEDURE_GROUP_PAYMENT = 'payment';

	const PROCEDURE_GROUP_RETURN = 'return';

	const PROCEDURE_GROUP_LISTING = 'listing';

	/**
	 * Gets the module name
	 */
	abstract public function getModuleName(
	):string;

	/**
	 * Sets the module name
	 */
	abstract public function setModuleName(
		string $moduleName
	):ProcedureEntry;

	/**
	 * Gets the event type
	 */
	abstract public function getEventType(
	):string;

	/**
	 * Sets the event type
	 */
	abstract public function setEventType(
		string $eventType
	):ProcedureEntry;

	/**
	 * Gets the procedure names
	 */
	abstract public function getProcedureNames(
	):array;

	/**
	 * Sets the procedure names
	 */
	abstract public function setProcedureNames(
		array $procedureNames
	):ProcedureEntry;

	/**
	 * Gets the procedure group
	 */
	abstract public function getProcedureGroup(
	):string;

	/**
	 * Sets the procedure group
	 */
	abstract public function setProcedureGroup(
		string $procedureGroup
	):ProcedureEntry;

	/**
	 * Gets the procedure class
	 */
	abstract public function getProcedureClass(
	):string;

	/**
	 * Sets the procedure class
	 */
	abstract public function setProcedureClass(
		string $procedureClass
	):ProcedureEntry;

}