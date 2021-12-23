<?php
namespace Plenty\Modules\ShopBuilder\Helper;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Plenty\Modules\Authentication\Services\Hasher\AdminPreviewHasher;
use Plenty\Modules\Plugin\FrontendPreview\Services\FrontendPreviewService;

/**
 * Get information about the current request made from the shop builder preview.
 */
abstract class ShopBuilderRequest 
{

	/**
	 * Determine if the current request is made from the shop builder preview or while rendering a widget via REST.
	 */
	abstract public function isShopBuilder(
	):bool;

	/**
	 * Get the type of the previewed shop builder content.
	 */
	abstract public function getPreviewContentType(
	):string;

	/**
	 * Get uri of the current preview. This might be used when rendering widgets via REST
to know the context where the widget will be placed into after rendering.
	 */
	abstract public function getPreviewUri(
	);

	/**
	 * Get the content type of the currently displayed main content.
	 */
	abstract public function getMainContentType(
	):string;

	/**
	 * Set the type of the currently displayed item content
This will be used to determine the corresponding header/footer contents which are linked to a specific type.
	 */
	abstract public function setMainContentType(
		string $mainContentType
	);

	/**
	 * Get the container name where the main content will be loaded into.
	 */
	abstract public function getMainContainerName(
	):string;

	/**
	 * Set the container name where the main content will be loaded into.
	 */
	abstract public function setMainContainerName(
		string $mainContainerName
	);

	/**
	 * Set the id of the currently displayed category.
	 */
	abstract public function setMainCategory(
		 $mainCategory
	);

}