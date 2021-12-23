<?php
namespace Plenty\Validation;

use Plenty\Validation\Contracts\Attribute;
use Plenty\Validation\Contracts\AttributeHelperContract;

/**
 * RulesCollection represents a collection of rules connected to an attribute
 */
abstract class RulesCollection 
{

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