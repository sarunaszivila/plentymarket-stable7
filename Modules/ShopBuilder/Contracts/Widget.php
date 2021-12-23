<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ContentBuilder\Contracts\RenderableContract;

/**
 * Contract for content widgets
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
	 * Render the template of the widget.
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}