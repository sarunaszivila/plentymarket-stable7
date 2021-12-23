<?php
namespace Plenty\Repositories\Criteria;

use Plenty\Repositories\Criteria\Casts\CanCastArbitraryValues;

/**
 * comparison class
 */
abstract class Comparison 
{

	abstract public function getOperator(
	):string;

	abstract public function getTerm(
	);

	abstract public function isOperator(
		string $comparison
	):bool;

	abstract public function castTerm(
		string $castTo
	);

}