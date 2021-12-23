<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag availability model.
 */
abstract class TagAvailability 
{

	const TAG_TYPE_CATEGORY = 'category';

	const TAG_TYPE_TICKET = 'ticket';

	const TAG_TYPE_VARIATION = 'variation';

	const TAG_TYPE_BOARD = 'board';

	const TAG_TYPE_CONTACT = 'contact';

	const TAG_TYPE_ORDER = 'order';

	const TAG_TYPE_MESSENGER = 'messenger';

	const TAG_TYPE_MESSAGE_BILLABLE = 'messageBillable';

	const TAG_TYPE_MESSAGE_CLEARING_SUB_ACCOUNT = 'messageClearingSubAccount';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$tagId;
	
public		$tagType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}