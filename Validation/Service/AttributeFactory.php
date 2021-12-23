<?php
namespace Plenty\Validation\Service;

use Plenty\Validation\Contracts\Attribute;

/**
 * Instantiates Attribute Classes
 */
abstract class AttributeFactory 
{

	/**
	 * Creates a new attribute
	 */
	abstract public function create(
		string $which
	):Attribute;

}