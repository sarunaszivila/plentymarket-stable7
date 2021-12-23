<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BaseMutator;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * To be written...
 */
abstract class VariationPropertyGroupMutator implements MutatorInterface

{

	abstract public function mutate(
		array $data
	):array;

	abstract public function getDependencies(
	);

}