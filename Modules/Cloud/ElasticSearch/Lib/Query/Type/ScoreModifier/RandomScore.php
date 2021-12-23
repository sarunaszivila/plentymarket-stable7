<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * to be written
 */
abstract class RandomScore implements TypeInterface, ScoreModifierInterface

{

	abstract public function getFunction(
	):array;

	abstract public function getBoostMode(
	);

	abstract public function getSeed(
	):string;

	abstract public function setSeed(
		string $seed
	):RandomScore;

	abstract public function setQuery(
		 $query
	);

	abstract public function toArray(
	);

}