<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<?
if(CModule::IncludeModule("iblock"))
{
	$res = CIBlockSection::GetList(array(), array("ACTIVE" => "Y", "IBLOCK_TYPE" => "video", "IBLOCK_CODE" => "video_files", "CODE" => $_REQUEST["section"]), false, array("ID", "IBLOCK_ID"));
	$ar = $res->Fetch();
	if(intval($res->SelectedRowsCount()) != 0)
	{
		$rsSection = CIBlockSection::GetList(array("SORT" => "ASC"), array("ACTIVE" => "Y", "IBLOCK_TYPE" => "video", "IBLOCK_ID" => $ar["IBLOCK_ID"], "SECTION_ID" => $ar["ID"], "UF_WORKER" => "installer"), false, array("UF_ARCHIVE"));
		if(intval($rsSection->SelectedRowsCount()) > 0)
		{
			echo '<select id="'.$_REQUEST["section"].'"><option value="">Выбрать</option>';
			while($arSection = $rsSection->GetNext())
			{
				$rs = CIBlockElement::GetList(
					array("SORT"=>"ASC"), 
					array(
						"ACTIVE" => "Y",
						"IBLOCK_ID" => $ar["IBLOCK_ID"],
						"SECTION_ID" => $arSection["ID"],
						"INCLUDE_SUBSECTIONS" => "Y"				
					)
				);
				
				if (intval($rs->SelectedRowsCount()) > 0)
					echo '<option value="'.$arSection["CODE"].'">'.$arSection["NAME"].'</option>';
			}
			echo '</select>';
		}
	}
}
?>