<?php
namespace Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Elements\Base;

use Plenty\Modules\Catalog\Contracts\UI\UIValueContract;

/**
 * Base UI Option value
 */
abstract class Value implements UIValueContract

{

	abstract public function toArray(
	);

	abstract public function getCaption(
	):string;

	abstract public function getValue(
	);

	abstract public function getColor(
	):string;

	abstract public function getIcon(
	):string;

	abstract public function setCaption(
		string $caption
	):Value;

	abstract public function setValue(
		 $value
	):Value;

	abstract public function setColor(
		string $color
	):Value;

	abstract public function setIcon(
		string $icon
	):Value;

}