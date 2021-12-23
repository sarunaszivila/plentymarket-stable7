<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ContentBuilder\Contracts\WidgetContract;

/**
 * Contract for widgets with dynamic settings
 */
interface DynamicWidget 
{

	/**
	 * Get base data of the widget. Each widget should define at least an
identifier and a label to be displayed in the builder. In total the following information can be provided:
<ul>
 <li>identifier: A unique identifier of the widget. This is used to identify widgets when loading widgets of a content in the builder.</li>
 <li>label: The label of the widget to be displayed in the list of available widgets in the builder.</li>
 <li>previewImageURL: The url of the preview image to be displayed in the list of available widgets in the builder.</li>
 <li>type: The type of the widget. This is used to restrict possible locations of the widgets using the allowedNestingTypes.</li>
 <li>categories: A list of category keys defined in the list of categories to be displayed in the list of available widgets. If no correspondig category exists, the widget will be located in a generic category.</li>
 <li>position: The position of the widget in the list of available widgets</li>
 <li>maxPerPage: Restrict the amount of times the widget can be placed on a single content.</li>
 <li>allowedNestingTypes: A list of widget types that are allowed to be placed in child dropzones of the widget.</li>
 <li>deprecated: set to true to hide the widget in the list of available widgets. Existing deprecated widgets can still be edited but not added anymore.</li>
</ul>
	 */
	public function getData(
	):array;

	/**
	 * Get the settings of the widgets. Settings are displayed in a terra-form when the widget is selected in the builder.
	 */
	public function getSettings(
	):array;

	/**
	 * Render the template of the widget twice to get the final markup to be displayed in the preview of the builder.
	 */
	public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the template of the widget.
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}