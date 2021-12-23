<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Legacy\Services\Item\Image\ImageService;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\ObjectMutator;
use Plenty\Modules\Helper\Contracts\KeyValueStorageRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Converts image domains to client specific image domains.
 */
abstract class ImageDomainMutator implements MutatorInterface

{

	abstract public function getPath(
	):string;

	abstract public function mutateObject(
		array $data
	):array;

	abstract public function setClient(
		int $plentyId
	):self;

	abstract public function mutate(
		array $data
	):array;

	public function getDependencies(
	):array
	{
		return null;
	}

}