<?php
namespace Plenty\Modules\Catalog\Services\UI\Sections;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Services\UI\Sections\Section\Section;
use Plenty\Modules\Catalog\Services\UI\Sections\Validators\SectionValidator;

/**
 * Sections container
 */
abstract class Sections 
{

	/**
	 * Adds a section to the container
	 */
	abstract public function add(
		Section $section
	):Sections;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

}