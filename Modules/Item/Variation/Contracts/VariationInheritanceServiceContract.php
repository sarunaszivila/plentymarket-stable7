<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Models\Variation;

/**
 * To be written...
 */
interface VariationInheritanceServiceContract 
{

	const TYPE_CATEGORY = 'category';

	const TYPE_SALES_PRICE = 'salesPrice';

	const TYPE_MARKET = 'market';

	const TYPE_CLIENT = 'client';

	const TYPE_SUPPLIER = 'supplier';

	const TYPE_WAREHOUSE = 'warehouse';

	const TYPE_AVAILABILITY = 'availability';

	const TYPE_PROPERTY = 'property';

	const TYPE_TAG = 'tag';

	public function activate(
		Variation $variation, 
		string $type
	);

	public function deactivate(
		Variation $variation, 
		string $type
	);

}