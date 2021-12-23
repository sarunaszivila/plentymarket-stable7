<?php
namespace Plenty\Modules\Plugin\DataBase\Annotations;


abstract class NonTableAttribute 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}