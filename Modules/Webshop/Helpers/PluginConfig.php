<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Plugin\ConfigRepository;

/**
 * Helper to get plugin configuration values. Provides several methods to read configuration values and cast them into required type.
 */
abstract class PluginConfig 
{

	/**
	 * Initially load configuration values into member variables.
	 */
	abstract protected function load(
	);

	/**
	 * Return the name of the plugin to get the configuration values for.
	 */
	abstract protected function getPluginName(
	):string;

	/**
	 * Get values of a multiselect configuration.
	 */
	protected function getMultiSelectValue(
		string $key, 
		array $possibleValues = [], 
		array $default = []
	):array
	{
		return null;
	}

	/**
	 * Get the value of a text configuration.
	 */
	protected function getTextValue(
		string $key, 
		string $default = "", 
		string $transformDefault = ""
	):string
	{
		return null;
	}

	/**
	 * Get the value of an integer configuration.
	 */
	protected function getIntegerValue(
		string $key, 
		int $default = 0
	):int
	{
		return null;
	}

	/**
	 * Get the value of a boolean configuration.
	 */
	protected function getBooleanValue(
		string $key, 
		bool $default = false
	):bool
	{
		return null;
	}

	/**
	 * Get a configuration value without any cast.
	 */
	protected function getConfigValue(
		string $key, 
		 $default = null
	)
	{
		return null;
	}

}