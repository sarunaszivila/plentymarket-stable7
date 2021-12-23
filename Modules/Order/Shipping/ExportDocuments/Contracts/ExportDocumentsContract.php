<?php
namespace Plenty\Modules\Order\Shipping\ExportDocuments\Contracts;

use Plenty\Modules\Order\Shipping\ExportDocuments\Models\ExportDocument;

/**
 * Repository for Export Documents
 */
interface ExportDocumentsContract 
{

	/**
	 * List export documents by order ID
	 */
	public function listExportDocumentsByOrderId(
		int $orderId
	):ExportDocument;

}