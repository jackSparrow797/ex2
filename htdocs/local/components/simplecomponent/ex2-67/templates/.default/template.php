<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//dump($arResult);
?>
---<p><b>Каталог:</b></p>
<ul>
<?
foreach($arResult["CLASSIFIER"] as $section)
{
	?>
	<li><b><?=$section["NAME"]?></b></li>
	<ul>
	<? 
	if( is_array($section["ELEMENTS_ID"]) && (count($section["ELEMENTS_ID"]) > 0) )
	{
		foreach($section["ELEMENTS_ID"] as $elem)
		{
			?><li><?=$arResult["ELEMENTS"][$elem]["NAME"]?> - <?=$arResult["ELEMENTS"][$elem]["PROP"]["PRICE"]["VALUE"]?><?
		}
	}
	?>
	</li>
	</ul>
<?
}
?>
</ul>
