<?php
namespace Plenty\Modules\Amazon\Contracts;


interface AmazonClientRequest 
{

	public function getRequestData(
	):array;

	public function requiresSellerId(
	):bool;

	public function getSellerIdFieldName(
	):string;

	public function getAction(
	):string;

}