<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Магазин сантехнических изделий");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.small.mail",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>