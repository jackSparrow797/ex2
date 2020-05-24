<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
	"PARAMETERS" => array(
        "PRODUCT_IBLOCK_ID" => array(
            "NAME" => GetMessage("PRODUCT_IBLOCK"),
            "TYPE" => "STRING",
        ),
        "FIRMS_IBLOCK_ID" => array(
            "NAME" => GetMessage("FIRMS_IBLOCK"),
            "TYPE" => "STRING",
        ),
        "PROPERTY_FIRMS_CODE" => array(
            "NAME" => GetMessage("PROPERTY_FIRMS"),
            "TYPE" => "STRING",
        ),
        "ELEMENTS_PER_PAGE" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("ELEMENTS_PER_PAGE"),
            "TYPE" => "STRING",
            "DEFAULT" => "2"
        ),
		"CACHE_TIME"  =>  array("DEFAULT"=>36000000),
		"CACHE_FILTER" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("IBLOCK_CACHE_FILTER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
	),
);