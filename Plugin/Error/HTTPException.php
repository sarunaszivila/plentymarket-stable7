<?php
namespace Plenty\Plugin\Error;


/**
 * Created by ptopczewski, 29.12.15 13:48
Class HTTPException
 */
abstract class HTTPException extends \Exception 

{

	/**
	 * HTTPException constructor.
	 */
	abstract public function __construct(
		string $statusCode, 
		string $message, 
		\Exception $previous = null
	);

}