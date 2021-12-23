<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Modules\Fulfillment\Contracts\ShippingProviderConfigFormContract;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\CheckboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\DateField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\FormField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\HyperlinkField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\InputField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\SelectboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\TimeField;
use Plenty\Plugin\Translation\Translator;

/**
 * The ShippingProviderConfigFormService is the service for creating the config form for a shipping provider.
 */
abstract class ShippingProviderConfigFormService 
{

	abstract public function addDateField(
		 $dateField
	);

	abstract public function addTimeField(
		 $timeField
	);

	abstract public function addInputField(
		 $inputField
	);

	abstract public function addCheckboxField(
		 $checkboxField
	);

	abstract public function addSelectboxField(
		 $selectboxField
	);

	abstract public function addHyperlinkField(
		 $hyperlinkField
	);

	abstract public function getConfigFields(
	);

}