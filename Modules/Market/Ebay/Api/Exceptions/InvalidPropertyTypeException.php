<?php
namespace Plenty\Modules\Market\Ebay\Api\Exceptions;


/**
 * InvalidPropertyTypeException.
 */
abstract class InvalidPropertyTypeException 
{

	abstract public function getMessage(
	);

	abstract public function getCode(
	);

	abstract public function getFile(
	);

	abstract public function getLine(
	);

	abstract public function getTrace(
	);

	abstract public function getPrevious(
	);

	abstract public function getTraceAsString(
	);

}