<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\InnerHit\InnerHitInterface;

/**
 * to be written
 */
interface CollapseInterface 
{

	public function addInnerHit(
		InnerHitInterface $innerHit
	);

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}