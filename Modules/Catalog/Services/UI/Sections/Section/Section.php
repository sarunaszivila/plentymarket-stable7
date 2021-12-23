<?php
namespace Plenty\Modules\Catalog\Services\UI\Sections\Section;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;
use Plenty\Modules\Catalog\Services\UI\Options\Validators\OptionValidator;
use stdClass;

/**
 * Section container
 */
abstract class Section implements UIOptionsContract

{

	/**
	 * Add an option
	 */
	abstract public function add(
		UIOptionContract $option, 
		string $key = null
	):UIOptionsContract;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

	abstract public function getLabel(
	):string;

	/**
	 * Setter for label property
	 */
	abstract public function setLabel(
		string $label
	):Section;

	/**
	 * Getter for the key property
	 */
	abstract public function getKey(
	):string;

	/**
	 * Setter for the key property
	 */
	abstract public function setKey(
		string $key
	):Section;

}