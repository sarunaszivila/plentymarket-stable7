<?php
namespace Plenty\Modules\User\Models;


/**
 * User
 */
abstract class User 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$user;
	
public		$realName;
	
public		$lang;
	
public		$ipLimit;
	
public		$ustatus;
	
public		$memberId;
	
public		$timestamp;
	
public		$email;
	
public		$timezone;
	
public		$googleEmail;
	
public		$skype;
	
public		$ical;
	
public		$psConfig;
	
public		$psItem;
	
public		$psEbay;
	
public		$psStock;
	
public		$psCustomer;
	
public		$psOrder;
	
public		$psStats;
	
public		$psData;
	
public		$pcConfig;
	
public		$pcContent;
	
public		$pcNewsletter;
	
public		$pcLayout;
	
public		$pcDialog;
	
public		$pcStats;
	
public		$pcData;
	
public		$pcBlog;
	
public		$signature;
	
public		$color;
	
public		$eks;
	
public		$payments;
	
public		$acceptAgb;
	
public		$api;
	
public		$image;
	
public		$delOrder;
	
public		$delArticle;
	
public		$delRecord;
	
public		$plentystat;
	
public		$plentyconnect;
	
public		$webspaceAccess;
	
public		$accessControlList;
	
public		$plentymarketsShippingOrderId;
	
public		$plentymarketsShippingItem;
	
public		$plentymarketsShippingAuto;
	
public		$plentymarketsShippingLabel;
	
public		$plentymarketsShippingConfig;
	
public		$warehouseId;
	
public		$calendar;
	
public		$orderStatus;
	
public		$warehouseRepairId;
	
public		$project;
	
public		$ticket;
	
public		$order;
	
public		$blog;
	
public		$lead;
	
public		$customer;
	
public		$totalVacationDays;
	
public		$roleId;
	
public		$salutation;
	
public		$dataLang;
	
public		$disabled;
	
public		$scheduler;
	
public		$item;
	
public		$incomingItems;
	
public		$backendPluginSetId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}