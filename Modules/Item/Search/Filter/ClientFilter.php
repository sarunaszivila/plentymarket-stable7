<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\ClientFilter as PimFilter;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;

/**
 * foo
 */
abstract class ClientFilter implements TypeInterface

{

	abstract public function isVisibleForClient(
		int $clientId
	);

	abstract public function isVisibleForAtLeastOneClient(
		array $clientIds
	);

	abstract public function isVisibleForAllClients(
		array $clientIds
	);

	/**
	 * -1, 0, 1, 2
	 */
	abstract public function hasAutomaticClientVisibility(
		array $values
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}