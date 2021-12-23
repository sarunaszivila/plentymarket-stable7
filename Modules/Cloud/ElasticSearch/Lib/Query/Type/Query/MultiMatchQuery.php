<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Query;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;

/**
 * to be written
 */
abstract class MultiMatchQuery 
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
	):MultiMatchQuery;

	abstract public function setFuzzy(
		bool $fuzzy
	):MultiMatchQuery;

}