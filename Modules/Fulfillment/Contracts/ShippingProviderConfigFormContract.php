<?php
namespace Plenty\Modules\Fulfillment\Contracts;

use Plenty\Modules\Fulfillment\DataModels\ConfigForm\CheckboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\DateField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\HyperlinkField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\InputField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\SelectboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\TimeField;

/**
 * Add fields to the shipping provider config form.
 */
interface ShippingProviderConfigFormContract 
{

	/**
	 * Add a shipping provider date field to the config form
	 */
	public function addDateField(
		DateField $dateField
	);

	/**
	 * Add a shipping provider time field to the config form
	 */
	public function addTimeField(
		TimeField $timeField
	);

	/**
	 * Add a shipping provider input field to the config form
	 */
	public function addInputField(
		InputField $inputField
	);

	/**
	 * Add a shipping provider checkbox field to the config form
	 */
	public function addCheckboxField(
		CheckboxField $checkboxField
	);

	/**
	 * Add a shipping provider selectbox field to the config form
	 */
	public function addSelectboxField(
		SelectboxField $selectboxField
	);

	/**
	 * Add a shipping provider hyperlink field to the config form
	 */
	public function addHyperlinkField(
		HyperlinkField $hyperlinkField
	);

	/**
	 * Get the list with the config fields
	 */
	public function getConfigFields(
	):array;

}