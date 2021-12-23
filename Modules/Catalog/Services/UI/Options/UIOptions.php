<?php
namespace Plenty\Modules\Catalog\Services\UI\Options;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\Validators\OptionValidator;
use stdClass;

/**
 * UI Options container
 */
abstract class UIOptions 
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

}