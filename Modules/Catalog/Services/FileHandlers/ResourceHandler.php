<?php
namespace Plenty\Modules\Catalog\Services\FileHandlers;

use Exception;
use Plenty\Modules\Catalog\Helpers\Throwables\CatalogThrowables;

/**
 * Handles writing on resources.
 */
abstract class ResourceHandler 
{

	/**
	 * Write to resource
	 */
	abstract public function write(
		string $string
	);

	/**
	 * Write CSV to resource
	 */
	abstract public function writeCSV(
		array $fields, 
		string $separator = ",", 
		string $enclosure = null, 
		string $escape = null
	);

	/**
	 * Write a JSON line to build a JSONL file
	 */
	abstract public function writeJSONLine(
		 $data
	);

	/**
	 * Rewinds resource
	 */
	abstract public function rewind(
	):bool;

}