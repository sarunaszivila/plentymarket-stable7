<?php
namespace Plenty\Repositories\Models;


/**
 * Unspecified length pagination response
 */
abstract class UnspecifiedLengthPaginationResponse 
{

	abstract public function getPage(
	):int;

	abstract public function getItemsPerPage(
	):int;

	abstract public function getFirstOnPage(
	);

	abstract public function getLastOnPage(
	);

	abstract public function isLastPage(
	):bool;

	abstract public function jsonSerialize(
	):array;

}