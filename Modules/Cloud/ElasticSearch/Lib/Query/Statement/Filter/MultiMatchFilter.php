<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * to be written
 */
abstract class MultiMatchFilter 
{

	abstract public function addField(
		string $field, 
		int $boost = 0
	);

	abstract public function toArray(
	):array;

	abstract public function setType(
		string $type
	);

	abstract public function setOperator(
		string $operator
	):MultiMatchFilter;

	abstract public function setFuzzy(
		bool $fuzzy
	):MultiMatchFilter;

}