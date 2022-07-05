<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\UI\Extension;

    // CSS
    Extension::load('ui.bootstrap4');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/template_style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

    // JS
    CJSCore::Init(array("jquery"));

    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');

    $APPLICATION->ShowHead();
    ?>
<title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

<?php $APPLICATION->ShowPanel();?>
