<?php
namespace Plenty\Modules\Catalog\Services\UI\Assignments;

use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;

/**
 * Assignments container
 */
abstract class Assignments 
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