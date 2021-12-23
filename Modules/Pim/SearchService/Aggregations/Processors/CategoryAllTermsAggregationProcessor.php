<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Processors;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\AggregationProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition\ConditionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Pim\SearchService\Aggregations\CategoryAllTermsAggregation;

/**
 * Processor for CategoryAllTermsAggregation
 */
abstract class CategoryAllTermsAggregationProcessor implements ProcessorInterface

{

	/**
	 * Processes the data provided by the aggregation
	 */
	abstract public function process(
		array $data
	):array;

	/**
	 * Get the name of the aggregation
	 */
	abstract public function getName(
	):string;

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function addCondition(
		ConditionInterface $conditions
	):self;

}