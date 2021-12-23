<?php
namespace Plenty\Modules\Market\Helper\Contracts;


/**
 * The contract for the market account helper repository.
 */
interface MarketAccountHelperRepositoryContract 
{

	/**
	 * List market accounts
	 */
	public function listMarketAccounts(
		float $marketId
	):array;

}