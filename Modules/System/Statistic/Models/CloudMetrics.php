<?php
namespace Plenty\Modules\System\Statistic\Models;


/**
 * Represent cloud metrics for a specific day
 */
abstract class CloudMetrics 
{
	
public		$plentyId;
	
public		$date;
	
public		$webspaceMB;
	
public		$webspaceDocumentsMB;
	
public		$websiteContentMB;
	
public		$cloudSpaceDocumentsMB;
	
public		$cloudSpaceItemsMB;
	
public		$cloudSpacePrivateMB;
	
public		$cloudSpacePublicMB;
	
public		$dbSpaceMb;
	
public		$websiteTrafficMB;
	
public		$cdnTrafficMB;
	
public		$cdnTrafficCount;
	
public		$contentCachingPutRequests;
	
public		$contentCachingGetRequests;
	
public		$userAccounts;
	
public		$warehouses;
	
public		$warehousesSales;
	
public		$facetSearchItems;
	
public		$facetSearchCalls;
	
public		$items;
	
public		$itemVariations;
	
public		$hbciDailyAccounts;
	
public		$hbciHourlyAccounts;
	
public		$ebicsDailyAccounts;
	
public		$ebicsHourlyAccounts;
	
public		$emailAccountsWithTicketGeneration;
	
public		$ebayAccountsWithTicketGeneration;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}