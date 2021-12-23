<?php
namespace Plenty\Modules\Catalog\Services\UI\Options\Elements\Values;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Contracts\UI\UIValueContract;
use Plenty\Modules\Catalog\Contracts\UI\UIValuesContract;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Validators\ValueValidator;

/**
 * UI Option values container
 */
abstract class Values implements UIValuesContract

{

	/**
	 * Add a value
	 */
	abstract public function add(
		UIValueContract $value
	):UIValuesContract;

	abstract public function toArray(
	);

}