<?php
namespace Plenty\Modules\Helper\Exceptions;


/**
 * Class EncryptionException
 */
abstract class EncryptionException extends \Exception 

{

	/**
	 * data is empty
	 */
	const EMPTY_DATA = 1;

	/**
	 * invalid encoding mode
	 */
	const INVALID_ENCODING_MODE = 2;

	abstract public function __construct(
		string $message, 
		int $code = 0
	);

}