<?php
namespace Plenty\Modules\Order\Exceptions;

use Exception;

/**
 * Exception when duplicate order is created.
 */
abstract class OrderDuplicateException 
{

	const ORDER_WITH_HASH_ALREADY_CREATED = 1;

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