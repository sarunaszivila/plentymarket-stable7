<?php
namespace Plenty\Modules\Notifications\Contracts;

use Illuminate\Validation\ValidationException;
use Plenty\Modules\Notifications\Errors\NotificationException;
use Plenty\Modules\Notifications\Models\Notification;
use Plenty\Repositories\Models\UnspecifiedLengthPaginationResponse;

/**
 * Plugin Notifications Service
 */
interface NotificationsRepositoryContract 
{

	/**
	 * Add a Notification in the system
	 */
	public function addNotification(
		array $notificationBuiltWithNotificationBuilder
	):array;

	/**
	 * Fetch a list of short/incomplete notifications, containing only the subject. To be used for listing purposes.
	 */
	public function fetchNotifications(
		array $queryBuiltWithNotificationsQueryBuilder, 
		int $page, 
		int $itemsPerPage
	):UnspecifiedLengthPaginationResponse;

	/**
	 * Fetch all the details of a Notification based on its id.
	 */
	public function fetchNotificationsDetails(
		array $notificationsFetchDetailsQuery
	):array;

	/**
	 * Mark a Notification as acknowledged.
	 */
	public function acknowledgeNotifications(
		array $queryBuiltWithNotificationsAcknowledgeQueryBuilder
	):bool;

	/**
	 * Retrieve the current unread Notifications count
	 */
	public function getNotificationsCount(
		array $queryBuiltWithNotificationsQueryBuilder
	):int;

}