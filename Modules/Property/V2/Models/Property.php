<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property model. Properties allow to further describe items, customers etc.
 */
abstract class Property 
{

	const MAX_PER_PAGE = 250;

	const CAST_INT = 'int';

	const CAST_FLOAT = 'float';

	const CAST_NONE = 'empty';

	const CAST_STRING = 'string';

	const CAST_TEXT = 'text';

	const CAST_HTML = 'html';

	const CAST_SELECTION = 'selection';

	const CAST_MULTI_SELECTION = 'multiSelection';

	const CAST_FILE = 'file';

	const CAST_DATE = 'date';

	const CASTS = ['int','float','empty','string','text','html','selection','multiSelection','file','date'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$cast;
	
public		$type;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$amazon;
	
public		$names;
	
public		$groups;
	
public		$options;
	
public		$selections;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}