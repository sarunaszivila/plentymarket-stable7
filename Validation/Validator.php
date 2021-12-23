<?php
namespace Plenty\Validation;

use Illuminate\Support\Arr;
use Plenty\Exceptions\ValidationException;
use Plenty\Validation\Contracts\Attribute;
use Plenty\Validation\Contracts\AttributeHelperContract;
use Plenty\Validation\Contracts\ConditionalAttribute;
use Validator as BaseValidator;

/**
 * Base Validator Class
 */
abstract class Validator 
{
	
protected		$customMessageKey = "";
	
	/**
	 * Validate the given data against the rules of this validtor
	 */
	public static function validateOrFail(
		array $data
	)
	{
		//proxy method
	}

	/**
	 * Add conditions to each item of a list
	 */
	abstract public function each(
		string $attributeName
	):RulesCollection;

	/**
	 * Load translated custom message
	 */
	public function buildCustomMessages(
	):array
	{
		return null;
	}

	/**
	 * Get the value of the given attribute.
	 */
	protected function getAttributeValue(
		string $attribute
	)
	{
	}

	/**
	 * Must be implemented in each subclass. Define the attributes for the validator.
	 */
	abstract protected function defineAttributes(
	);

	/**
	 * Add attribute without type
	 */
	public function add(
		string $attributeName
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add attribute without type (with or without requirement)
	 */
	public function addConditional(
		string $attributeName, 
		bool $required
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add int attribute
	 */
	public function addInt(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add numeric attribute
	 */
	public function addNumeric(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add date attribute
	 */
	public function addDate(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add bool attribute
	 */
	public function addBool(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add string attribute
	 */
	public function addString(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add a rule for an attribute based on the result of the condition callback.
	 */
	public function sometimes(
		string $attributeName, 
		callable $condition
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add condition to validate if a list contains specific keys
	 */
	abstract public function arrayKeysInList(
		string $attributeName, 
		array $acceptedKeysList
	):Attribute;

}