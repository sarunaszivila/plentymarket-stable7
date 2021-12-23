<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\InnerHit;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * foo
 */
abstract class BaseInnerHit implements InnerHitInterface

{

	abstract public function setSorting(
		SortingInterface $sorting
	);

	abstract public function setSource(
		SourceInterface $source
	);

	abstract public function getName(
	):string;

	abstract public function toArray(
	):array;

}