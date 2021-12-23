<?php
namespace Plenty\Log\Exceptions;


/**
 * Class ReferenceTypeException
 */
abstract class ReferenceTypeException extends \Exception 

{

	/**
	 * reference type is already registered.
	 */
	const REFERENCE_TYPE_ALREADY_EXISTS = 1;

	abstract public function __construct(
		string $message, 
		int $code, 
		\Exception $previous = null
	);

}