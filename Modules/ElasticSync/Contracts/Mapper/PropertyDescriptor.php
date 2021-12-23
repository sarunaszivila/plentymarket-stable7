<?php
namespace Plenty\Modules\ElasticSync\Contracts\Mapper;

use Plenty\Modules\ElasticSync\Models\DataProvider\PropertyInformation;

/**
 * describes properties of a Model
 */
interface PropertyDescriptor 
{

	public function getPropertyInformation(
		string $modelClassName
	):array;

}