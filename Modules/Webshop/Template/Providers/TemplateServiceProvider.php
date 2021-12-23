<?php
namespace Plenty\Modules\Webshop\Template\Providers;

use Plenty\Modules\Webshop\Template\Services\TemplateService;
use Plenty\Plugin\ServiceProvider;

/**
 * Service provider for template plugins
 */
abstract class TemplateServiceProvider extends \Plenty\Plugin\ServiceProvider 

{

	/**
	 * Override a twig template. The new template will be used when the overridden template is going to be rendered.
	 */
	public function overrideTemplate(
		string $original, 
		string $override
	)
	{
		return null;
	}

	/**
	 * Add an alias for a template. Rendering the template will also check for overrides of the alias template.
	 */
	public function addTemplateAlias(
		string $original, 
		string $alias
	)
	{
		return null;
	}

}