<?php
namespace Plenty\Modules\EventProcedures\Services\Entries;


/**
 * The filter entry contains all information needed to use module filters in plentymarkets event procedures.
 */
abstract class FilterEntry 
{

	const EVENT_TYPE_ORDER = 'order';

	const EVENT_TYPE_REORDER = 'reorder';

	const EVENT_TYPE_TICKET = 'ticket';

	/**
	 * Gets the module name.
	 */
	abstract public function getModuleName(
	):string;

	/**
	 * Sets the module name
	 */
	abstract public function setModuleName(
		string $moduleName
	):FilterEntry;

	/**
	 * Gets the type of event for the current filter entry.
	 */
	abstract public function getEventType(
	):string;

	/**
	 * Sets the event type
	 */
	abstract public function setEventType(
		string $eventType
	):FilterEntry;

	/**
	 * Gets the filter names
	 */
	abstract public function getFilterNames(
	):array;

	/**
	 * Sets the filter names
	 */
	abstract public function setFilterNames(
		array $filterNames
	):FilterEntry;

	/**
	 * Gets the filter class
	 */
	abstract public function getFilterClass(
	):string;

	/**
	 * Sets the filter class
	 */
	abstract public function setFilterClass(
		string $filterClass
	):FilterEntry;

}