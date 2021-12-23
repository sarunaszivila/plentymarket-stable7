<?php
namespace Plenty\Modules\Catalog\Legacy\ElasticExport\Example\Model;


/**
 * The example model.
 */
abstract class Example 
{
	
public		$exampleId;
	
public		$exampleName;
	
public		$exampleText;
	
public		$examplePrice;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}