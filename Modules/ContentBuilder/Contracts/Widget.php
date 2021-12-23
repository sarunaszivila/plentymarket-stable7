<?php
namespace Plenty\Modules\ContentBuilder\Contracts;


/**
 * This contract is deprecated. Use `Plenty\Modules\ShopBuilder\Contracts\Widget` instead.
 */
interface Widget 
{

	/**
	 * Render the template of the widget twice to get the final markup to be displayed in the preview of the builder.
	 */
	public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the template of the widget. Returns a twig-template which will be included in the frontend
or rendered again for generating the preview.
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}