<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition;


/**
 * to be written
 */
interface ConditionInterface 
{

	public function isValid(
		array $document
	):bool;

}