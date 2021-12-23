<?php
namespace Plenty\Modules\Template\Design\Config\Contracts;

use Plenty\Modules\Template\Design\Config\Models\Design;

/**
 * Repository for Design of the deprecated CMS
 */
interface DesignRepositoryContract 
{

	public function loadAll(
	):array;

	public function findByDesignName(
		string $designName, 
		bool $withConfig = true
	):Design;

	public function getCheckoutType(
	):array;

}