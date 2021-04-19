<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */

$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);
/**
 * Получим параметр из GET 
 * передадим в $arResult для передачи в свойство заказа
 * установим параметр в куки
 */
$UTM_SOURCE = $request->get("utm_source");
$arResult["UTM_SOURCE"] = $UTM_SOURCE;
setcookie("utm_source", $UTM_SOURCE, time() + 3600);