<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Models\Content;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, create, delete, und update shopBuilder contents.
 */
interface ContentRepositoryContract 
{

	/**
	 * Get all contents with all their widget data.
	 */
	public function getContents(
	):array;

	/**
	 * Search for contents. Search params are queried conjunctively while values for each params are queried disjunctively:
	 */
	public function searchContents(
		int $itemsPerPage = 20, 
		int $page = 1, 
		array $params = []
	):PaginatedResult;

	/**
	 * Get a single content.
	 */
	public function getContent(
		int $contentId, 
		int $pluginSetId = 0, 
		string $frontendLanguage = null, 
		string $versionId = ""
	):Content;

	/**
	 * Get a list of versions of the specified content.
	 */
	public function listContentVersions(
		int $contentId, 
		int $itemsPerPage = 20, 
		string $versionIdMarker = ""
	);

	/**
	 * Restore a content to a specific version.
	 */
	public function restoreContentVersion(
		int $contentId, 
		string $versionId, 
		int $pluginSetId = 0, 
		null $frontendLanguage = null
	);

	/**
	 * Create new content. New content will not be linked to any layout container.
	 */
	public function createContent(
		int $pluginSetId, 
		 $data, 
		string $frontendLanguage = null
	):Content;

	/**
	 * Update content. Metadata, such as the user defined name of the content, will be stored separately to the data of the widgets.
	 */
	public function updateContent(
		int $pluginSetId, 
		int $contentId, 
		 $data, 
		string $frontendLanguage = null
	):Content;

	/**
	 * Delete content. Any connections to layout containers will be removed, too.
	 */
	public function deleteContent(
		int $pluginSetId, 
		int $contentId
	);

	/**
	 * Duplicate a content and its link.
	 */
	public function duplicateContent(
		int $contentId, 
		int $targetPluginSetId, 
		string $language, 
		string $containerName, 
		string $contentName
	):Content;

	/**
	 * Rebuild all contents linked to the current plugin set.
	 */
	public function rebuildContents(
		string $containerName = null, 
		int $pluginSetId = 0
	):int;

}