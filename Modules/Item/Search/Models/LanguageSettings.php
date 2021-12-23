<?php
namespace Plenty\Modules\Item\Search\Models;


/**
 * The language settings model
 */
abstract class LanguageSettings 
{

	const MAX_ACTIVE = 3;

	const KEY = 'ElasticSearch_languages';
	
public		$languages;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}