<?php
namespace Plenty\Modules\Notifications\Models;


/**
 * The Notification Model
 */
abstract class Notification 
{

	const NOTIFICATION_TYPE_INFO = 'info';

	const NOTIFICATION_TYPE_TODO = 'todo';

	const NOTIFICATION_TYPE_WARNING = 'warning';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}