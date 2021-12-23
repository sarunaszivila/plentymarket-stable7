<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Mapping\Property;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * to be written
 */
interface PropertyInterface 
{

	public function setIndex(
		IndexInterface $index
	);

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}