<?php

function validYear($year)
{
	$date=new DateTime();
	$currentYear=$date->format('Y');
	if(!filter_var($year,FILTER_VALIDATE_INT) || $year<1900 || $year>$currentYear)
	{
		return false;
	}
	return true;
}

function complete($value)
{
	$trimmedVal=trim($value);
	if(empty($trimmedVal))
	{
		return false;
	}
	return true;
}

?>