<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\CategorySettingFactory as CoreCategorySettingsFactory;

/**
 * Factory to define a category picker in the widget settings.
 */
abstract class CategorySettingFactory 
{

	/**
	 * Display or hide a button to reset the current selection.
	 */
	abstract public function withDisplayResetButton(
		bool $displayResetButton
	):self;

	/**
	 * Display or hide an input to search for categories with.
	 */
	abstract public function withDisplaySearch(
		bool $displaySearch
	):self;

	abstract public function withShowFullSelectionPath(
		bool $showFullSelectionPath
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