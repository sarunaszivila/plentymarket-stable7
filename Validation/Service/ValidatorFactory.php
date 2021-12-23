<?php
namespace Plenty\Validation\Service;

use Plenty\Validation\Validator;

/**
 * Instantiates Validator Classes
 */
abstract class ValidatorFactory 
{

	/**
	 * Creates a new validator
	 */
	abstract public function create(
		string $validatorClass
	):Validator;

}