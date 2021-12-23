<?php
namespace Plenty\Modules\ShopBuilder\Factories;

use Plenty\Modules\ContentBuilder\Factories\WidgetSettingsFactory as CoreWidgetSettingsFactory;

/**
 * Factory to generate widget settings
 */
abstract class WidgetSettingsFactory 
{

	/**
	 * Create a new factory instance and initialize values from given widget class.
	 */
	abstract public static function inherit(
		string $parentWidgetClass
	):self;

	/**
	 * Create a new factory instance with initial values.
	 */
	abstract public static function create(
		array $data = []
	):self;

	/**
	 * Create a generic widget settings entry.
	 */
	abstract public function createSetting(
		string $key, 
		string $settingsFactory = "", 
		array $args = []
	);

	/**
	 * Generate settings data from all registered factories
	 */
	abstract public function toArray(
	):array;

	/**
	 * Set a settings key to insert new settings after.
	 */
	abstract public function withPointer(
		string $key
	):self;

	/**
	 * Insert a new settings factory at the current pointer.
	 */
	abstract public function addSetting(
		string $key, 
		 $setting
	);

}