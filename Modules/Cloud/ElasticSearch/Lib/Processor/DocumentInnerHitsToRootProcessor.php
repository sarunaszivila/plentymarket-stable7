<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition\ConditionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * DocumentInnerHitsToRootProcessor
 */
abstract class DocumentInnerHitsToRootProcessor 
{

	abstract public function process(
		array $data
	):array;

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function addCondition(
		ConditionInterface $conditions
	):self;

}