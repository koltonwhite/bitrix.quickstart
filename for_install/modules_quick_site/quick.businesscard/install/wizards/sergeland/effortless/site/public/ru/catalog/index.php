<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog", "catalog", array(
		"IBLOCK_TYPE" => "#IBLOCK_TYPE_CATALOG#",
		"IBLOCK_ID" => "#IBLOCK_ID_CATALOG#",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_ELEMENT_COUNTER" => "N",
		"USE_FILTER" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"ACTION_VARIABLE" => "eshop",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "1",
		"SECTIONS_VIEW_MODE" => "TEXT",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "9",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SEO_DESCRIPTION",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "NEW",
			1 => "ACTION",
			2 => "PRESENCE",
			3 => "EXPECTED",
			4 => "UNDER",
			5 => "UNAVAILABLE",
			6 => "CURRENCY",
			7 => "PRICE",
			8 => "PRICE_OLD",
			9 => "MORE_PRODUCTS",
			10 => "MORE_PRODUCTS_HEADER",
			11 => "DOCUMENTS",
			12 => "URL_VIDEO",
			13 => "SPECIFICATION_NAME",
			14 => "SPECIFICATION_VALUE",
			15 => "USE_SHARE",
			16 => "SHOW_ORDER_FORM",
			17 => "SHOW_NAME",
			18 => "REQ_NAME",
			19 => "SHOW_PHONE",
			20 => "REQ_PHONE",
			21 => "SHOW_EMAIL",
			22 => "REQ_EMAIL",
			23 => "SHOW_COMMENT",
			24 => "REQ_COMMENT",
			25 => "TEXT_BUTTON",
			26 => "POPULAR",
			27 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "NEW",
			1 => "ACTION",
			2 => "PRESENCE",
			3 => "EXPECTED",
			4 => "UNDER",
			5 => "UNAVAILABLE",
			6 => "CURRENCY",
			7 => "PRICE",
			8 => "PRICE_OLD",
			9 => "MORE_PRODUCTS",
			10 => "MORE_PRODUCTS_HEADER",
			11 => "DOCUMENTS",
			12 => "URL_VIDEO",
			13 => "SPECIFICATION_NAME",
			14 => "SPECIFICATION_VALUE",
			15 => "USE_SHARE",
			16 => "SHOW_ORDER_FORM",
			17 => "SHOW_NAME",
			18 => "REQ_NAME",
			19 => "SHOW_PHONE",
			20 => "REQ_PHONE",
			21 => "SHOW_EMAIL",
			22 => "REQ_EMAIL",
			23 => "SHOW_COMMENT",
			24 => "REQ_COMMENT",
			25 => "TEXT_BUTTON",
			26 => "POPULAR",
			27 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"LINK_ORDER_IBLOCK_TYPE" => "#IBLOCK_TYPE_ORDERS#",
		"LINK_ORDER_IBLOCK_ID" => "#IBLOCK_ID_ORDERS#",
		"LINK_COMMENTS_IBLOCK_TYPE" => "#IBLOCK_TYPE_CATALOG_COMMENTS#",
		"LINK_COMMENTS_IBLOCK_ID" => "#IBLOCK_ID_CATALOG_COMMENTS#",
		"LINK_COMMENTS_PROPERTY_SID" => "ID",
		"LINK_COMMENTS_PAGE_ELEMENT_COUNT" => "10",
		"LINK_COMMENTS_ELEMENT_SORT_FIELD" => "active_from",
		"LINK_COMMENTS_ELEMENT_SORT_ORDER" => "desc",
		"LINK_COMMENTS_ELEMENT_SORT_FIELD2" => "id",
		"LINK_COMMENTS_ELEMENT_SORT_ORDER2" => "desc",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => "effortless",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"MESS_BTN_BUY" => "",
		"MESS_BTN_ADD_TO_BASKET" => "",
		"MESS_BTN_COMPARE" => "",
		"MESS_BTN_DETAIL" => "",
		"MESS_NOT_AVAILABLE" => "",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_BRAND_USE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"USE_REVIEW" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"USE_ALSO_BUY" => "N",
		"PAGER_TITLE" => "",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"TEMPLATE_THEME" => "blue",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"USE_SALE_BESTSELLERS" => "N",
		"LINK_IBLOCK_TYPE" => "",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"DETAIL_ADD_TO_BASKET_ACTION" => "BUY",
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMPONENT_TEMPLATE" => "catalog",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>