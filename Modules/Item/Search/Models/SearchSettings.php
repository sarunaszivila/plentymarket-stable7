<?php
namespace Plenty\Modules\Item\Search\Models;


/**
 * The search settings model
 */
abstract class SearchSettings 
{

	const KEY = 'ElasticSearch_settings';
	
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