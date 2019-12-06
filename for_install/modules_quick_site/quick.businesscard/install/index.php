<?
/**
 * Copyright (c) 6/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class quick_effortless extends CModule
{
	var $MODULE_ID = "quick.effortless";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function quick_effortless()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("SCOM_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("SCOM_INSTALL_DESCRIPTION");
		
		$this->PARTNER_NAME = "ASDAFF";
		$this->PARTNER_URI = "https://asdaff.github.io/";
	}


	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("quick.effortless");
		RegisterModuleDependences("main", "OnBeforeProlog", "quick.effortless", "CSergelandeffortless", "ShowPanel");

		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModuleDependences("main", "OnBeforeProlog", "quick.effortless", "CSergelandeffortless", "ShowPanel"); 
		UnRegisterModule("quick.effortless");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/quick.effortless/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);		
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/quick.effortless/install/wizards", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards", true, true);
			
		return true;
	}

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
		DeleteDirFilesEx("/bitrix/wizards/quick");
		DeleteDirFilesEx("/bitrix/components/quick");
		
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();
		return true;
	}

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		return true;
	}
}
?>