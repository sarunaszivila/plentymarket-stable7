<?php
namespace Plenty\Modules\Catalog\Containers;

use InvalidArgumentException;
use Plenty\Modules\Catalog\Models\TemplateGroup;

/**
 * The TemplateGroupContainer collects all groups of a specific template.
 */
abstract class TemplateGroupContainer 
{

	abstract public function addGroup(
		TemplateGroup $group
	);

	abstract public function getGroups(
	):array;

	abstract public function getGroup(
		string $identifier
	):TemplateGroup;

}