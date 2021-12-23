<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\ObjectMutator;

/**
 * To be written...
 */
abstract class ImageMutator implements MutatorInterface

{

	const SORT_ID = 'id';

	const SORT_POSITION = 'position';

	const SECTION_ALL = 'all';

	const SECTION_ITEM = 'item';

	const SECTION_VARIATION = 'variation';

	abstract public function getPath(
	):string;

	abstract public function setSorting(
		string $field
	);

	abstract public function setSections(
		 $sections
	);

	abstract public function mutateObject(
		array $data
	):array;

	abstract public function addMarket(
		int $marketId
	):self;

	abstract public function addClient(
		int $plentyId
	):self;

	abstract public function addListing(
		int $listingId
	):self;

	abstract public function getDependencies(
	):array;

	abstract public function mutate(
		array $data
	):array;

}