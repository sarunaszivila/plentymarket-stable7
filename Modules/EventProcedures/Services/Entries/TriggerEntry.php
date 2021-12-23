<?php
namespace Plenty\Modules\EventProcedures\Services\Entries;


/**
 * The trigger entry contains all information needed to use module triggers in plentymarkets event procedures.
 */
abstract class TriggerEntry 
{

	const EVENT_TYPE_ORDER = 'ORDER';

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
	):TriggerEntry;

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
	):TriggerEntry;

	/**
	 * Gets the trigger identifier
	 */
	abstract public function getTriggerIdentifier(
	):string;

	/**
	 * Sets the trigger identifier
	 */
	abstract public function setTriggerIdentifier(
		string $triggerIdentifier
	):TriggerEntry;

	/**
	 * Gets the trigger names
	 */
	abstract public function getTriggerNames(
	):array;

	/**
	 * Sets the trigger names
	 */
	abstract public function setTriggerNames(
		array $triggerNames
	):TriggerEntry;

	/**
	 * Gets the trigger
	 */
	abstract public function getTrigger(
	):int;

}