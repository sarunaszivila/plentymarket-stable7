<?php
namespace Plenty\Repositories\Services;

use Plenty\Repositories\Contracts\PaginationOptionsProvider;

/**
 * Array pagination
 */
abstract class RequestPaginationOptionsProvider 
{

	abstract public function setCurrentItemsPerPage(
		int $currentItemsPerPage
	):self;

	abstract public function setCurrentPage(
		int $currentPage
	):self;

	abstract public function getCurrentItemsPerPage(
	):int;

	abstract public function getCurrentPage(
	):int;

}