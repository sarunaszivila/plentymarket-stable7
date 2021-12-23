<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * To be written
 */
interface ScoreModifierInterface 
{

	public function setQuery(
		 $query
	);

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}