<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	
<div class="block-header__nav top-menu">    
	<ul class="top-menu block-flex">

	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<?if($arItem["SELECTED"]):?>
			<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?endif?>
		
	<?endforeach?>

	</ul>
</div>
<?endif?>