<?php
namespace Plenty\Modules\BI\KeyFigure\Contracts;

use Plenty\Modules\BI\KeyFigure\Models\KeyFigureResultSearchResponse;
use Plenty\Modules\BI\KeyFigure\Models\KeyFigureSearchRequests;

/**
 * This interface allows you to search for key figures results.
 */
interface KeyFigureResultRepositoryContract 
{

	/**
	 * Search for key figure calculation results
	 */
	public function searchKeyFigureResults(
		KeyFigureSearchRequests $searchRequests
	):KeyFigureResultSearchResponse;

}