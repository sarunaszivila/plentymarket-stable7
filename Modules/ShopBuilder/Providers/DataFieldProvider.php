<?php
namespace Plenty\Modules\ShopBuilder\Providers;

use Plenty\Modules\ContentBuilder\Providers\DataFieldProvider as CoreDataFieldProvider;

/**
 * Base class for data field providers.
 */
abstract class DataFieldProvider 
{

	/**
	 * Register data fields and child providers.
	 */
	abstract public function register(
	);

	/**
	 * Register a new data field.
	 */
	public function addField(
		string $identifier, 
		string $label, 
		string $expression, 
		bool $isBlockElement = false, 
		bool $isDeprecated = false
	)
	{
		return null;
	}

	/**
	 * Register a nested provider containing a list of child data fields.
	 */
	public function addChildProvider(
		string $label, 
		string $childProviderClass, 
		array $params = [], 
		string $identifier = ""
	)
	{
		return null;
	}

	/**
	 * Assign keywords to a field to be respected during search.
	 */
	public function addSearchKeywords(
		string $identifier, 
		array $keywords = []
	)
	{
		return null;
	}

}