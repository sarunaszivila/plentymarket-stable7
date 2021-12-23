<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\InnerHit\InnerHitInterface;

/**
 * foo
 */
abstract class BaseCollapse implements CollapseInterface

{

	abstract public function addInnerHit(
		InnerHitInterface $innerHit
	);

	abstract public function toArray(
	):array;

}