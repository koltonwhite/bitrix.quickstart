<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();$dbSite=CSite::GetByID(WIZARD_SITE_ID);if($arSite=$dbSite->Fetch())
$lang=$arSite["LANGUAGE_ID"];if(strlen($lang)<=0)
$lang="ru";$defCurrency="EUR";if($lang=="ru")$defCurrency="RUB";elseif($lang=="en")$defCurrency="USD";$banner_head=$wizard->GetVar("banner_head");$banner_text=$wizard->GetVar("banner_text");for($i=0;$i<count($banner_head);$i++)
{COption::SetOptionString("streetstyle","banner_head_$i",$banner_head["banner_head_$i"],false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","banner_text_$i",$banner_text["banner_text_$i"],false,WIZARD_SITE_ID);}
COption::SetOptionString("streetstyle","shopVk",$wizard->GetVar("shopVk"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopFacebook",$wizard->GetVar("shopFacebook"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopTwitter",$wizard->GetVar("shopTwitter"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","siteMetaDescription",$wizard->GetVar("siteMetaDescription"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","siteMetaKeywords",$wizard->GetVar("siteMetaKeywords"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","siteName",$wizard->GetVar("siteName"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopEmail",$wizard->GetVar("shopEmail"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopOfName",$wizard->GetVar("shopOfName"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopLocation",$wizard->GetVar("shopLocation"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopAdr",$wizard->GetVar("shopAdr"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","siteTelephone",$wizard->GetVar("siteTelephone"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","siteSchedule",$wizard->GetVar("siteSchedule"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopINN",$wizard->GetVar("shopINN"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopKPP",$wizard->GetVar("shopKPP"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopNS",$wizard->GetVar("shopNS"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopBANK",$wizard->GetVar("shopBANK"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopBANKREKV",$wizard->GetVar("shopBANKREKV"),false,WIZARD_SITE_ID);COption::SetOptionString("streetstyle","shopKS",$wizard->GetVar("shopKS"),false,WIZARD_SITE_ID);$status=($wizard->GetVar("installDemoData")=="Y")?"Y":"N";COption::SetOptionString("streetstyle","installDemoData",$status,false,WIZARD_SITE_ID);$status=($wizard->GetVar("useSKUPrice")=="Y")?"Y":"N";COption::SetOptionString("streetstyle","useSKUPrice",$status,false,WIZARD_SITE_ID);$type=$wizard->GetVar("personType");foreach($type as $name=>$status)
{$status=($status=="Y")?"Y":"N";COption::SetOptionString("streetstyle",$name,$status,false,WIZARD_SITE_ID);}
$type=$wizard->GetVar("paysystem");foreach($type as $name=>$status)
{$status=($status=="Y")?"Y":"N";COption::SetOptionString("streetstyle",$name,$status,false,WIZARD_SITE_ID);}
$type=$wizard->GetVar("delivery");foreach($type as $name=>$status)
{$status=($status=="Y")?"Y":"N";COption::SetOptionString("streetstyle",$name,$status,false,WIZARD_SITE_ID);}
$obSite=new CSite;$obSite->Update(WIZARD_SITE_ID,Array("EMAIL"=>$wizard->GetVar("shopEmail"),"NAME"=>"[".WIZARD_SITE_ID."] ".GetMessage("wiz_site_name"),"SITE_NAME"=>$wizard->GetVar("siteName"),"SERVER_NAME"=>SERVER_NAME,));COption::SetOptionString("main","site_name",$wizard->GetVar("siteName"));COption::SetOptionString("main","email_from",$wizard->GetVar("shopEmail"));COption::SetOptionString("main","map_top_menu_type","top, right");COption::SetOptionString("main","map_left_menu_type","podmenu");COption::SetOptionString("main","new_user_registration","Y");COption::SetOptionString("main","captcha_registration","N");COption::SetOptionString("main","CAPTCHA_presets","0");COption::SetOptionString("main","CAPTCHA_transparentTextPercent","0");COption::SetOptionString("main","CAPTCHA_arBGColor_1","FFFFFF");COption::SetOptionString("main","CAPTCHA_arBGColor_2","FFFFFF");COption::SetOptionString("main","CAPTCHA_numEllipses","0");COption::SetOptionString("main","CAPTCHA_arEllipseColor_1","7F7F7F");COption::SetOptionString("main","CAPTCHA_arEllipseColor_2","FFFFFF");COption::SetOptionString("main","CAPTCHA_bLinesOverText","Y");COption::SetOptionString("main","CAPTCHA_numLines","0");COption::SetOptionString("main","CAPTCHA_arLineColor_1","FFFFFF");COption::SetOptionString("main","CAPTCHA_arLineColor_2","FFFFFF");COption::SetOptionString("main","CAPTCHA_textStartX","40");COption::SetOptionString("main","CAPTCHA_textFontSize","26");COption::SetOptionString("main","CAPTCHA_arTextColor_1","000000");COption::SetOptionString("main","CAPTCHA_arTextColor_2","000000");COption::SetOptionString("main","CAPTCHA_textAngel_1","-15");COption::SetOptionString("main","CAPTCHA_textAngel_2","15");COption::SetOptionString("main","CAPTCHA_textDistance_1","-2");COption::SetOptionString("main","CAPTCHA_textDistance_2","-2");COption::SetOptionString("main","CAPTCHA_bWaveTransformation","Y");COption::SetOptionString("main","CAPTCHA_bEmptyText","N");COption::SetOptionString("main","CAPTCHA_arBorderColor","000000");COption::SetOptionString("main","CAPTCHA_arTTFFiles","bitrix_captcha.ttf");COption::SetOptionString("main","CAPTCHA_letters","ABCDEFGHJKLMNPQRSTWXYZ23456789");COption::SetOptionString("sale","SHOP_SITE_".WIZARD_SITE_ID,WIZARD_SITE_ID);COption::SetOptionString("sale","default_currency",$defCurrency);$arSubscribe=unserialize(COption::GetOptionString("sale","subscribe_prod",""));$arSubscribe[WIZARD_SITE_ID]=($wizard->GetVar("catalogSubscribe")=="Y")?array("use"=>"Y","del_after"=>"100"):array("del_after"=>"100");;COption::SetOptionString("sale","subscribe_prod",serialize($arSubscribe));$productReserveCondition=$wizard->GetVar("productReserveCondition");$productReserveCondition=(in_array($productReserveCondition,array("O","P","D","S")))?$productReserveCondition:"P";COption::SetOptionString("sale","product_reserve_condition",$productReserveCondition);COption::SetOptionString("sale","order_email",$wizard->GetVar("shopEmail"));COption::SetOptionString("sale","delete_after","30");COption::SetOptionString("sale","order_list_date","30");COption::SetOptionString("sale","MAX_LOCK_TIME","30");COption::SetOptionString("sale","GRAPH_WEIGHT","600");COption::SetOptionString("sale","GRAPH_HEIGHT","600");COption::SetOptionString("sale","path2user_ps_files","/bitrix/php_interface/include/sale_payment/");COption::SetOptionString("sale","lock_catalog","Y");COption::SetOptionString("sale","affiliate_param_name","partner");COption::SetOptionString("sale","affiliate_life_time","30");COption::SetOptionString("sale","show_order_sum","N");COption::SetOptionString("sale","show_order_product_xml_id","N");COption::SetOptionString("sale","show_paysystem_action_id","N");COption::SetOptionString("sale","measurement_path","/bitrix/modules/sale/measurements.php");COption::SetOptionString("sale","delivery_handles_custom_path","/bitrix/php_interface/include/sale_delivery/");COption::SetOptionString("sale","recalc_product_list","Y");COption::SetOptionString("sale","recalc_product_list_period","4");COption::SetOptionString("sale","affiliate_plan_type","N");COption::SetOptionString("sale","WEIGHT_different_set","N",false,WIZARD_SITE_ID);COption::SetOptionString("sale","weight_unit",GetMessage("SALE_WIZARD_WEIGHT_UNIT"),false,WIZARD_SITE_ID);COption::SetOptionString("sale","weight_koef","1000",false,WIZARD_SITE_ID);COption::SetOptionString("sale","ADDRESS_different_set","N");COption::SetOptionString("sale","order_list_fields","ID,USER,PAY_SYSTEM,PRICE,STATUS,PAYED,PS_STATUS,CANCELED,BASKET");COption::SetOptionString("sale","GROUP_DEFAULT_RIGHT","D");COption::SetOptionString("sale","1C_SALE_SITE_LIST",WIZARD_SITE_ID);COption::SetOptionString("sale","1C_EXPORT_PAYED_ORDERS","N");COption::SetOptionString("sale","1C_EXPORT_ALLOW_DELIVERY_ORDERS","N");COption::SetOptionString("sale","1C_EXPORT_FINAL_ORDERS","");COption::SetOptionString("sale","1C_FINAL_STATUS_ON_DELIVERY","F");COption::SetOptionString("sale","1C_REPLACE_CURRENCY",GetMessage("SALE_WIZARD_PS_BILL_RUB"));COption::SetOptionString("sale","1C_SALE_USE_ZIP","Y");COption::SetOptionString("sale","location_zip","101000");COption::SetOptionString("catalog","save_product_without_price","N");COption::SetOptionString("catalog","show_catalog_tab_with_offers","Y");$status=($wizard->GetVar("useStoreControl")=="Y")?"Y":"N";COption::SetOptionString("catalog","default_use_store_control",$status);COption::SetOptionString("catalog","default_quantity_trace","Y");COption::SetOptionString("catalog","default_can_buy_zero","Y");COption::SetOptionString("catalog","allow_negative_amount","Y");COption::SetOptionString("catalog","enable_reservation","Y");COption::SetOptionString("socialnetwork","allow_tooltip","N",false,WIZARD_SITE_ID);COption::SetOptionString("fileman","propstypes",serialize(array("description"=>GetMessage("MAIN_OPT_DESCRIPTION"),"keywords"=>GetMessage("MAIN_OPT_KEYWORDS"),"title"=>GetMessage("MAIN_OPT_TITLE"),"keywords_inner"=>GetMessage("MAIN_OPT_KEYWORDS_INNER"))),false,$siteID);COption::SetOptionInt("search","suggest_save_days",250);COption::SetOptionString("search","use_tf_cache","Y");COption::SetOptionString("search","use_word_distance","Y");COption::SetOptionString("search","use_social_rating","Y");COption::SetOptionString("iblock","use_htmledit","Y");COption::SetOptionString("iblock","show_xml_id","Y");COption::SetOptionString("iblock","combined_list_mode","Y");?>