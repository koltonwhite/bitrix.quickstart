<?php
/**
 * Created by PhpStorm.
 * User: ASDAFF
 * Date: 16.05.2018
 * Time: 21:49
 *
 * Event handling.
 *
 * We strongly recommend to group event handlers in classes.
 *
 * For example, you can handle events "OnBeforeUserAdd" and "OnBeforeUserUpdate"
 * with methods UserHandlers::OnBeforeUserAdd() and UserHandlers::OnBeforeUserUpdate(), like this:
 *
 * AddEventHandler("main", "OnBeforeUserAdd", Array("UserHandlers", "OnBeforeUserAdd"));
 */

use \Bitrix\Main\Loader;

$eventManager = \Bitrix\Main\EventManager::getInstance();

//page start
AddEventHandler("main", "OnPageStart", "loadLocalLib", 1);
function loadLocalLib()
{
    Loader::includeModule('local.lib');
}

/**
 * Подсветки PHP в редакторе
 **/
if ($_SERVER['SCRIPT_NAME'] == "/bitrix/admin/fileman_file_edit.php") {
    AddEventHandler("main", "OnEpilog", "InitPHPHighlight");
}

/**
 * BASKET
 * basket add
 **/
AddEventHandler("sale", "OnBeforeBasketAdd", array('Local\Lib\Handlers\Basket', 'beforeAdd'));
AddEventHandler("sale", "OnBasketAdd", array('Local\Lib\Handlers\Basket', 'afterAdd'));

/**
 * basket update
 **/
AddEventHandler("sale", "OnBeforeBasketUpdate", array('Local\Lib\Handlers\Basket', 'beforeUpdate'));
AddEventHandler("sale", "OnBasketUpdate", array('Local\Lib\Handlers\Basket', 'afterUpdate'));

/**
 * basket delete
 **/
AddEventHandler("sale", "OnBeforeBasketDelete", array('Local\Lib\Handlers\Basket', 'beforeDelete'));
AddEventHandler("sale", "OnBasketDelete", array('Local\Lib\Handlers\Basket', 'afterDelete'));


/**
 * order
 **/
AddEventHandler("sale", "OnOrderAdd", array('Local\Lib\Handlers\Order', 'afterAdd'));
AddEventHandler("sale", "OnOrderUpdate", array('Local\Lib\Handlers\Order', 'afterUpdate'));

/**
 * property types
 **/
AddEventHandler("main", "OnUserTypeBuildList", array('Local\Lib\Properties\Complect', 'GetUserTypeDescription'));
AddEventHandler("iblock", "OnIBlockPropertyBuildList", array('Local\Lib\Properties\Complect', 'GetUserTypeDescription'));


/**
 * user
 **/
AddEventHandler("main", "OnBeforeUserRegister", array('\Local\Lib\Handlers\User', 'beforeUpdate'));
AddEventHandler("main", "OnBeforeUserUpdate", array('\Local\Lib\Handlers\User', 'beforeUpdate'));

/**
 * highload blocks
 **/
$eventManager->addEventHandler('', 'UserDataOnUpdate', array('\Local\Lib\Handlers\UserData', 'afterUpdate'));
$eventManager->addEventHandler('', 'UserDataOnAdd', array('\Local\Lib\Handlers\UserData', 'afterAdd'));