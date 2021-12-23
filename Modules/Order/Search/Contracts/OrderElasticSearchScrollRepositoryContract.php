<?php
namespace Plenty\Modules\Order\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchScrollRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * This interface is deprecated and will be removed in the next version.
 */
interface OrderElasticSearchScrollRepositoryContract 
{

	public function hasNext(
	):bool;

	public function setNumberOfDocumentsPerShard(
		int $size
	);

	public function clear(
	);

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}