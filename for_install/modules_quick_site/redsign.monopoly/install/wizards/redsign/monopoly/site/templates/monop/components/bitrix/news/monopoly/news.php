<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	$arParams['RSMONOPOLY_LIST_TEMPLATES_LIST'],
	Array(
		"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
		"NEWS_COUNT"	=>	$arParams["NEWS_COUNT"],
		"SORT_BY1"	=>	$arParams["SORT_BY1"],
		"SORT_ORDER1"	=>	$arParams["SORT_ORDER1"],
		"SORT_BY2"	=>	$arParams["SORT_BY2"],
		"SORT_ORDER2"	=>	$arParams["SORT_ORDER2"],
		"FIELD_CODE"	=>	$arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"],
		"SET_TITLE"	=>	$arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN"	=>	$arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
		"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
		"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER"	=>	$arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER"	=>	$arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"DISPLAY_DATE"	=>	$arParams["DISPLAY_DATE"],
		"DISPLAY_NAME"	=>	"Y",
		"DISPLAY_PICTURE"	=>	$arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT"	=>	$arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN"	=>	$arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT"	=>	$arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS"	=>	$arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS"	=>	$arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME"	=>	$arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL"	=>	$arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES"	=>	$arParams["CHECK_DATES"],
		// monopoly
		"RSMONOPOLY_SHOW_BLOCK_NAME"		=> $arParams["RSMONOPOLY_SHOW_BLOCK_NAME_LIST"],
		"RSMONOPOLY_BLOCK_NAME_IS_LINK"		=> $arParams["RSMONOPOLY_BLOCK_NAME_IS_LINK_LIST"],
		"RSMONOPOLY_USE_OWL"				=> $arParams["RSMONOPOLY_USE_OWL_LIST"],
		"RSMONOPOLY_OWL_CHANGE_SPEED"		=> $arParams["RSMONOPOLY_OWL_CHANGE_SPEED_LIST"],
		"RSMONOPOLY_OWL_CHANGE_DELAY"		=> $arParams["RSMONOPOLY_OWL_CHANGE_DELAY_LIST"],
		"RSMONOPOLY_OWL_PHONE"				=> $arParams["RSMONOPOLY_OWL_PHONE_LIST"],
		"RSMONOPOLY_OWL_TABLET"				=> $arParams["RSMONOPOLY_OWL_TABLET_LIST"],
		"RSMONOPOLY_OWL_PC"					=> $arParams["RSMONOPOLY_OWL_PC_LIST"],
		"RSMONOPOLY_COLS_IN_ROW"			=> $arParams["RSMONOPOLY_COLS_IN_ROW_LIST"],
		"RSMONOPOLY_PROP_PUBLISHER_NAME"	=> $arParams["RSMONOPOLY_PROP_PUBLISHER_NAME_LIST"],
		"RSMONOPOLY_PROP_PUBLISHER_BLANK"	=> $arParams["RSMONOPOLY_PROP_PUBLISHER_BLANK_LIST"],
		"RSMONOPOLY_PROP_PUBLISHER_DESCR"	=> $arParams["RSMONOPOLY_PROP_PUBLISHER_DESCR_LIST"],
		"RSMONOPOLY_PROP_MARKER_TEXT"		=> $arParams["RSMONOPOLY_PROP_MARKER_TEXT_LIST"],
		"RSMONOPOLY_PROP_MARKER_COLOR"		=> $arParams["RSMONOPOLY_PROP_MARKER_COLOR_LIST"],
		"RSMONOPOLY_PROP_ACTION_DATE"		=> $arParams["RSMONOPOLY_PROP_ACTION_DATE_LIST"],
		"RSMONOPOLY_PROP_FILE"				=> $arParams["RSMONOPOLY_PROP_FILE_LIST"],
		"RSMONOPOLY_LINK"					=> $arParams["RSMONOPOLY_LINK_LIST"],
		"RSMONOPOLY_BLANK"					=> $arParams["RSMONOPOLY_BLANK_LIST"],
		"RSMONOPOLY_SHOW_DATE"				=> $arParams["RSMONOPOLY_SHOW_DATE_LIST"],
		"RSMONOPOLY_AUTHOR_NAME"			=> $arParams["RSMONOPOLY_AUTHOR_NAME_LIST"],
		"RSMONOPOLY_AUTHOR_JOB"				=> $arParams["RSMONOPOLY_AUTHOR_JOB_LIST"],
		"RSMONOPOLY_SHOW_BUTTON"			=> $arParams["RSMONOPOLY_SHOW_BUTTON_LIST"],
		"RSMONOPOLY_BUTTON_CAPTION"			=> $arParams["RSMONOPOLY_BUTTON_CAPTION_LIST"],
		"RSMONOPOLY_PROP_VACANCY_TYPE"		=> $arParams["RSMONOPOLY_PROP_VACANCY_TYPE_LIST"],
		"RSMONOPOLY_PROP_SIGNATURE"			=> $arParams["RSMONOPOLY_PROP_SIGNATURE_LIST"],
	),
	$component
);