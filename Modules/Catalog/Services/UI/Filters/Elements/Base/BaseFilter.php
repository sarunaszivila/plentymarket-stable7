<?php
namespace Plenty\Modules\Catalog\Services\UI\Filters\Elements\Base;

use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Contracts\UI\UIValuesContract;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Base\BaseUIOption;

/**
 * Base Filter
 */
abstract class BaseFilter 
{

	const TYPE_CHECKBOX = 'checkbox';

	const TYPE_DATE = 'date';

	const TYPE_MULTISELECT = 'multiselect';

	const TYPE_NUMBER = 'number';

	const TYPE_OPERATOR = 'operator';

	const TYPE_SELECT = 'select';

	const TYPE_TEXT = 'text';

	const TYPE_TOGGLE = 'toggle';

	const ALLOWED_TYPES = ['checkbox','date','multiselect','number','operator','select','text','toggle'];

	/**
	 * Accepts data, typically from the frontend
	 */
	abstract public function setData(
		array $data
	):self;

	/**
	 * Evaluates
	 */
	abstract public function evaluate(
		array $settings = []
	);

	abstract public function toArray(
	);

	abstract public function getKey(
	):string;

	abstract public function getLabel(
	):string;

	abstract public function getType(
	):string;

	abstract public function getDefaultValue(
	);

	abstract public function isVisible(
	):bool;

	abstract public function isRequired(
	):bool;

	abstract public function getValues(
	):UIValuesContract;

	abstract public function getChildren(
	):UIOptionsContract;

	abstract public function setKey(
		string $key
	):BaseUIOption;

	abstract public function setLabel(
		string $label
	):BaseUIOption;

	abstract public function setType(
		string $type
	):BaseUIOption;

	abstract public function setDefaultValue(
		 $defaultValue
	):BaseUIOption;

	abstract public function setVisible(
		bool $visible
	):BaseUIOption;

	abstract public function setRequired(
		bool $required
	):BaseUIOption;

	abstract public function setValues(
		UIValuesContract $values
	):BaseUIOption;

	abstract public function setChildren(
		UIOptionsContract $children
	):BaseUIOption;

}