<?php
namespace Plenty\Modules\Catalog\Contracts\UI;

use Illuminate\Contracts\Support\Arrayable;

/**
 * The UIValuesContract is the interface for the catalogue option values. This interface allows you to handle UI option values. The options are settings in the settings menu that can be defined in the backend.
 */
interface UIValuesContract 
{

	/**
	 * Add a value
	 */
	public function add(
		UIValueContract $value
	):UIValuesContract;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}