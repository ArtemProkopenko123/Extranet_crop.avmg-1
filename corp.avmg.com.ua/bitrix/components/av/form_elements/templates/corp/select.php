<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if(!$arParams["NAME"])                                          return;
/* -------------------------------------------------------------------- */
/* ------------------------------ select ------------------------------ */
/* -------------------------------------------------------------------- */
?>
<select
	data-av-form-item="select"
	name="<?=$arParams["NAME"]?>"
	class="av-form-elements-corp-select<?if($arParams["REQUIRED"]):?> required<?endif?>"
	title=""
	<?if($arParams["DISABLED"]):?>disabled<?endif?>
	<?=$arParams["ATTR"]?>
>
	<option value>0</option>
	<?foreach($arParams["LIST"] as $value => $title):?>
	<option value="<?=$value?>" <?if($value == $arParams["VALUE"]):?>selected<?endif?>><?=$title?></option>
	<?endforeach?>
</select>
<?
/* -------------------------------------------------------------------- */
/* --------------------------- styled select -------------------------- */
/* -------------------------------------------------------------------- */
?>
<div class="av-form-elements-corp-styled-select<?if($arParams["DISABLED"]):?> disabled<?endif?>">
	<div title="<?=$arParams["TITLE"]?>">
		<div><?=$arParams["VALUE"] ? $arParams["LIST"][$arParams["VALUE"]] : ($arParams["EMPTY_TITLE"] ? $arParams["EMPTY_TITLE"] : $arParams["TITLE"])?></div>
		<div></div>
	</div>

	<ul class="list">
		<?if($arParams["VALUE"]):?>
		<li data-list-value><?=$arParams["EMPTY_TITLE"] ? $arParams["EMPTY_TITLE"] : $arParams["TITLE"]?></li>
		<?endif?>

		<?foreach($arParams["LIST"] as $value => $title):?>
		<li data-list-value="<?=$value?>" <?if($value == $arParams["VALUE"]):?>class="selected"<?endif?>><?=$title?></li>
		<?endforeach?>
	</ul>
</div>