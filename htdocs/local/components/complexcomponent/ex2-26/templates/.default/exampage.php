<?
//ссылка "назад" должна строится на основании данных компоненты
//dump($arResult);
?>
<?
//получение значения переменных должны лежать в $arResult["VARIABLES"] не зависимо от режима работы компонента, ЧПУ/ не ЧУП 
//Переменная PARAMx $arResult["VARIABLES"]["PARAMx"]
/*

<br>Параметр 1: <?=$arResult["VARIABLES"]["PARAM1"]?>
<br>Параметр 2: <?=$arResult["VARIABLES"]["PARAM2"]?>
<br>Параметр 3: <?=$arResult["VARIABLES"]["PARAM3"]?>
<br>Параметр 4: <?=$arResult["VARIABLES"]["PARAM4"]?>

 * */
?>
<br>PARAM1 = <?=$arResult["VARIABLES"]["PARAM1"]?>
<br>PARAM2 = <?=$arResult["VARIABLES"]["PARAM2"]?>
<br>PARAM3 = <?=$arResult["VARIABLES"]["PARAM3"]?>

  