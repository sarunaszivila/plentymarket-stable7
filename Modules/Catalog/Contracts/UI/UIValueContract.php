<?php
namespace Plenty\Modules\Catalog\Contracts\UI;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Elements\Base\Value;

/**
 * The UIValueContract is the interface for an individual catalogue option value. This interface allows you to define UI option values. The options are settings in the settings menu that can be defined in the backend.
 */
interface UIValueContract 
{

	public function getCaption(
	):string;

	public function getValue(
	);

	public function getColor(
	):string;

	public function getIcon(
	):string;

	public function setCaption(
		string $caption
	):UIValueContract;

	public function setValue(
		 $value
	):UIValueContract;

	public function setColor(
		string $color
	):UIValueContract;

	public function setIcon(
		string $icon
	):UIValueContract;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}