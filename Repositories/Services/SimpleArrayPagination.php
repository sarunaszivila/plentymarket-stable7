<?php
namespace Plenty\Repositories\Services;

use Illuminate\Support\Collection;
use Plenty\Repositories\Contracts\Pagination;

/**
 * Array pagination
 */
abstract class SimpleArrayPagination 
{

	abstract public function buildResult(
		int $page, 
		int $offset
	):Collection;

	abstract public function getTotalCount(
	):int;

}