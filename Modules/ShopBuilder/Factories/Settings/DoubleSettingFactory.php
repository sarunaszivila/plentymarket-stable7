<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\DoubleSettingFactory as CoreDoubleSettingFactory;

/**
 * Factory to define a number input in the widget settings.
 */
abstract class DoubleSettingFactory 
{

	/**
	 * Define if input expects a monetary value.
	 */
	abstract public function withPriceInput(
		bool $isPriceInput
	):self;

	/**
	 * Set the number of decimal places for the input.
	 */
	abstract public function withDecimalCount(
		int $decimalCount
	):self;

	abstract public static function create(
		 $data = []
	);

	/**
	 * Set the type of the setting.
	 */
	abstract public function withType(
		string $type
	):self;

	/**
	 * Set an option for the setting.
	 */
	abstract public function withOption(
		string $key, 
		 $value
	):self;

	/**
	 * Set the default value for the setting.
	 */
	abstract public function withDefaultValue(
		 $defaultValue
	):self;

	/**
	 * Set a condition if the setting should be visible or not.
	 */
	abstract public function withCondition(
		string $condition
	):self;

	/**
	 * Set the name of the setting.
	 */
	abstract public function withName(
		string $name
	):self;

	/**
	 * Set a tooltip text for this input
	 */
	abstract public function withTooltip(
		string $tooltip
	):self;

	/**
	 * Determines whether the declaration is used to render a list of the specified form field.
	 */
	abstract public function withList(
		int $min = 0, 
		int $max = 0
	):self;

	/**
	 * Get all data as array
	 */
	abstract public function toArray(
	):array;

}