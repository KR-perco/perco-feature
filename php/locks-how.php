<div class="turnikets-video">
<?
$iblocks2 = GetIBlockList("video", "video_files");
if($arIBlock = $iblocks2->Fetch())
	$block_id2 = $arIBlock["ID"];
	$autoplay = 0;
$APPLICATION->IncludeComponent("bitrix:catalog.element", "last_video", array(
	"IBLOCK_ID" => $block_id2,
	"ELEMENT_ID" => "23545",
	"AUTOSTART" => "N",
	),
	false
);
?>
</div>