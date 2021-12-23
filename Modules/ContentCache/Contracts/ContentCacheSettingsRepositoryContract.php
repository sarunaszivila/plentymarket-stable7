<?php
namespace Plenty\Modules\ContentCache\Contracts;

use Plenty\Modules\ContentCache\ContentCacheSettings\ContentCacheSettings;

/**
 * Interface for content cache settings
 */
interface ContentCacheSettingsRepositoryContract 
{

	/**
	 * Get the content cache settings for the specified client.
	 */
	public function getSettings(
		int $plentyId
	):ContentCacheSettings;

	/**
	 * Get the content cache settings for multiple clients.
	 */
	public function getSettingsMultiple(
		array $plentyIds
	);

	/**
	 * Save the content cache settings for the specified client.
	 */
	public function saveSettings(
		int $plentyId, 
		bool $contentCacheActive
	):ContentCacheSettings;

	/**
	 * Get the date until when the content cache invalidation is deactivated.
	 */
	public function getInvalidationDate(
		int $plentyId
	):string;

	/**
	 * Save the date until when the content cache invalidation is deactivated.
	 */
	public function saveInvalidationDate(
		int $plentyId, 
		string $invalidationDate
	);

	/**
	 * Check if the content cache invalidation is currently active.
	 */
	public function isInvalidationActive(
		int $plentyId
	):bool;

	public function getInstantInvalidationCount(
		int $plentyId
	):int;

	public function invalidateInstantly(
		int $plentyId
	);

}