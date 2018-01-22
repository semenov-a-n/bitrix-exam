<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?><? $APPLICATION->IncludeComponent(
    "bitrix:system.auth.form",
    ".default",
    array(
        "FORGOT_PASSWORD_URL" => "user/",
        "PROFILE_URL" => "user/profile.php",
        "REGISTER_URL" => "/user/registratsiya.php",
        "SHOW_ERRORS" => "N",
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>