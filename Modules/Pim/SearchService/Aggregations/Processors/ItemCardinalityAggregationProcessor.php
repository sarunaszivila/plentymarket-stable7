<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Processors;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\BaseProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition\ConditionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * Processor for ItemCardinalityAggregation
 */
abstract class ItemCardinalityAggregationProcessor implements ProcessorInterface

{

	/**
	 * Processes the data provided by the aggregation
	 */
	abstract public function process(
		array $data
	):array;

	/**
	 * Get dependencies of the aggregation
	 */
	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function addCondition(
		ConditionInterface $conditions
	):self;

}