<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition\ConditionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * To be written
 */
abstract class ItemAttributeValueCardinalityAggregationProcessor 
{

	abstract public function process(
		 $data
	);

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function addCondition(
		ConditionInterface $conditions
	):self;

}