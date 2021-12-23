<?php
namespace Plenty\Modules\Category\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Category\Models\CategoryTemplate;

/**
 * Repository for category templates
 */
interface CategoryTemplateRepositoryContract 
{

	const CATEGORY_TPL_PLUGIN_NAME = 'CategoryTemplates';

	public function find(
		array $params
	):CategoryTemplate;

	public function put(
		array $data
	):CategoryTemplate;

	public function delete(
		array $data
	):CategoryTemplate;

}