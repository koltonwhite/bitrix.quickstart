<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("KLONDIKE_PSLIDER_PRODAUSIY_SLAYDER"),
	"DESCRIPTION" => "",
	"ICON" => "/images/icon.gif",
	"SORT" => 10,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "ASDAFF",
        "NAME" => 'Слайдер товаров',
        "CHILD" => array(
            "ID" => 'media',
            "NAME" => 'Мультимедиа',
            "SORT" => 10,
        ),
	),
	"COMPLEX" => "N",
);

?>