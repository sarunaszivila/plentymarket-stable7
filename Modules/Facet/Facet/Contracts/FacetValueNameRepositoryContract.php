<?php
namespace Plenty\Modules\Facet\Facet\Contracts;

use Exception;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Facet\Facet\Models\FacetValueName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the facet value name repository
 */
interface FacetValueNameRepositoryContract 
{

	public function findOne(
		int $valueId, 
		string $lang
	):FacetValueName;

	public function create(
		array $data
	):FacetValueName;

	public function update(
		int $valueId, 
		string $lang, 
		array $data
	):FacetValueName;

	public function delete(
		int $valueId, 
		string $lang
	):DeleteResponse;

}