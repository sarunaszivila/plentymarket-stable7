<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\ShopBuilder\Helper\ShopBuilderRequest;
use Plenty\Modules\ShopBuilder\Models\ContentLink;
use Plenty\Modules\ShopBuilder\Repositories\ContentRepository;

/**
 * Get, create, delete, and update links between shopBuilder contents and layout containers depending on plugin sets and languages.
 */
interface ContentLinkRepositoryContract 
{

	/**
	 * Get all content links for a plugin set.
	 */
	public function getContentLinks(
		int $pluginSetId
	):array;

	/**
	 * Get a single connection between a content and a layout container.
	 */
	public function getContentLink(
		int $contentLinkId
	):ContentLink;

	/**
	 * Create a link between a content and a layout container for a specified plugin set and a language.
	 */
	public function createContentLink(
		 $data
	):ContentLink;

	/**
	 * Update a link between a content and a layout container.
	 */
	public function updateContentLink(
		int $contentLinkId, 
		array $data
	):ContentLink;

	/**
	 * Unlink a content from a layout container. The content itself will remain.
	 */
	public function deleteContentLink(
		int $contentLinkId
	);

	/**
	 * Get all content links for a specific layout container.
	 */
	public function getContentLinksForContainer(
		string $containerName, 
		int $pluginSetId = null, 
		string $lang = null, 
		string $contentType = null, 
		bool $filterResults = true
	);

}