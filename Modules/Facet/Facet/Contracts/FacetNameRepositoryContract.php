<?php
namespace Plenty\Modules\Facet\Facet\Contracts;

use Exception;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Facet\Facet\Models\FacetName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the facet name repository
 */
interface FacetNameRepositoryContract 
{

	public function findOne(
		int $facetId, 
		string $lang
	):FacetName;

	public function create(
		array $data
	):FacetName;

	public function update(
		int $facetId, 
		string $lang, 
		array $data
	):FacetName;

	public function delete(
		int $facetId, 
		string $lang
	):DeleteResponse;

}