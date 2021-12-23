<?php
namespace Plenty\Modules\Catalog\Models;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Catalog\Containers\CatalogTemplateFieldContainer;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract;

/**
 * A TemplateGroup represents a portlet in the catalog UI. Each container field will be displayed in the same portlet. The order of the fields depends on the order they were added into the group.
 */
abstract class TemplateGroup 
{

	/**
	 * TemplateGroup constructor.
	 */
	abstract public function __construct(
		string $identifier, 
		string $label
	);

	/**
	 * Add a field to the group.
	 */
	abstract public function addGroupField(
		CatalogTemplateFieldContract $field
	);

	/**
	 * Get the identifier of the group.
	 */
	abstract public function getIdentifier(
	):string;

	/**
	 * Get the label of the group. The label will be displayed in the UI.
	 */
	abstract public function getLabel(
	):string;

	/**
	 * Get the CatalogTemplateFieldContainer that contains all the fields of the group.
	 */
	abstract public function getFieldContainer(
	):CatalogTemplateFieldContainer;

	/**
	 * Get a field specified by its key.
	 */
	abstract public function getField(
		string $key
	):CatalogTemplateFieldContract;

	abstract public function toArray(
	):array;

}