<?php
namespace Plenty\Plugin\Translation;

use Illuminate\Translation\Translator as LaravelTranslator;

/**
 * translation service
 */
abstract class Translator 
{

	/**
	 * Get the translation for a given key.
	 */
	abstract public function get(
		string $id, 
		array $parameters = [], 
		string $locale = null
	);

	/**
	 * Get the translation for a given key.
	 */
	abstract public function trans(
		string $id, 
		array $parameters = [], 
		string $locale = null
	);

}