<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator;


/**
 * to be written
 */
abstract class BaseMutator 
{

	public function getDependencies(
	):array
	{
		return null;
	}

	abstract public function mutate(
		array $data
	):array;

}