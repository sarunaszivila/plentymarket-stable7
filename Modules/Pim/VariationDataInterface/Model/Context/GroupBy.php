<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Context;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\BaseCollapse;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\InnerHit\BaseInnerHit;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SingleSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\IndependentSource;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * Group by the result, expects 2 params: field - the field which the result is grouped by, sorting - the inner sorting, must be instance of SortingInterface.)
 */
abstract class GroupBy 
{

	const INNER_HIT_NAME = 'groupBy';

	/**
	 * Get the field the result should be grouped by.
	 */
	abstract public function getField(
	):string;

}