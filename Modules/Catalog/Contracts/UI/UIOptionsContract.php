<?php
namespace Plenty\Modules\Catalog\Contracts\UI;

use Illuminate\Contracts\Support\Arrayable;

/**
 * The UIOptionsContract is the interface for the catalogue options. This interface allows you to handle UI options. The options are settings in the settings menu that can be defined in the backend.
 */
interface UIOptionsContract 
{

	/**
	 * Add an option
	 */
	public function add(
		UIOptionContract $option, 
		string $key = null
	):UIOptionsContract;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}