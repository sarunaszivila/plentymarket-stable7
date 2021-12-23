<?php
namespace Plenty\Modules\Item\Search\Models;


/**
 * The suggest settings model
 */
abstract class SuggestSettings 
{

	const KEY = 'ElasticSearch_suggest_settings';
	
public		$fields;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}