<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Models;

use Plenty\Repositories\Models\DataModel;

/**
 * The FailedRegisterShipment model.
 */
abstract class FailedRegisterShipment 
{

	abstract public function addErrorMessage(
		string $errorMessage
	);

	abstract public function addException(
		\Exception $exception
	);

	abstract public function setOrderId(
		int $orderId
	);

	abstract public function get(
		string $key
	);

	/**
	 * Determine if a get mutator exists for an attribute.
	 */
	abstract public function hasGetMutator(
		string $key
	):bool;

	abstract public function setAttributes(
		 $attributes
	);

	/**
	 * Set a given attribute on the model.
	 */
	abstract public function setAttribute(
		string $key, 
		 $value
	):self;

	/**
	 * Determine if a set mutator exists for an attribute.
	 */
	abstract public function hasSetMutator(
		string $key
	):bool;

	abstract public function changeValue(
		string $key, 
		callable $callback
	);

	abstract public function offsetExists(
		 $offset
	):bool;

	abstract public function offsetGet(
		 $offset
	);

	abstract public function offsetSet(
		 $offset, 
		 $value
	);

	abstract public function offsetUnset(
		 $offset
	);

	abstract public function toArray(
		bool $translate = false
	):array;

	abstract public function toJson(
		int $options = 0
	):string;

	abstract public function jsonSerialize(
	);

	/**
	 * Fill the model with an array of attributes.
	 */
	abstract public function fill(
		array $attributes
	):self;

	/**
	 * Determine if the given attribute may be mass assigned.
	 */
	abstract public function isFillable(
		string $key
	):bool;

	/**
	 * Get the fillable attributes for the model.
	 */
	abstract public function getFillable(
	):array;

	/**
	 * Set the fillable attributes for the model.
	 */
	abstract public function fillable(
		array $fillable
	):self;

	/**
	 * Determine whether an attribute should be cast to a native type.
	 */
	abstract public function hasCast(
		string $key, 
		 $types = null
	):bool;

	/**
	 * Decode the given JSON back into an array or object.
	 */
	abstract public function fromJson(
		string $value, 
		bool $asObject = false
	);

}