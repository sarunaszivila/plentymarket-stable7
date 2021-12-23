<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Models\ContentWidget;
use Plenty\Modules\ShopBuilder\Models\ContentWidgetData;
use Plenty\Modules\ShopBuilder\Models\ContentWidgetPreview;

/**
 * Register shopBuilder widgets.
 */
interface ContentWidgetRepositoryContract 
{

	/**
	 * Register a widget to be available in the shopBuilder.
	 */
	public function registerWidget(
		string $widgetClass
	);

	/**
	 * Override a widget class to extend data or settings of the widget.
	 */
	public function overrideWidget(
		string $widgetIdentifier, 
		string $overrideWidget
	);

}