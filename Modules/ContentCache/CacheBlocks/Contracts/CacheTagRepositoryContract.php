<?php
namespace Plenty\Modules\ContentCache\CacheBlocks\Contracts;


/**
 * Add tags to content cache entries for tag based invalidation.
 */
interface CacheTagRepositoryContract 
{

	/**
	 * Watch for accesses on a global twig variable and add all related cache tags on use.
	 */
	public function makeTaggable(
		string $variableName, 
		callable $factory, 
		string $dataType = ""
	);

}