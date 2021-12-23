<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\InnerHit;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface InnerHitInterface 
{

	public function getName(
	):string;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}