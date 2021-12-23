<?php
namespace Plenty\Modules\Helper\Services;

use Plenty\Modules\Helper\Models\KeyValue;

/**
 * Helper class for arrays
 */
abstract class ArrayHelper 
{

	/**
	 * Build an array out of the specified object list.
	 */
	abstract public function buildMapFromObjectList(
		 $list, 
		string $keyField, 
		string $valueField
	):KeyValue;

}