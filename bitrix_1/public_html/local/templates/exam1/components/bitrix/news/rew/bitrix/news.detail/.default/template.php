<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<header>
    <h1><? $APPLICATION->ShowTitle(false) ?></h1>
</header>
<hr>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <? echo $arResult["DETAIL_TEXT"]; ?>
        </div>
        <div class="review-autor">
            <?= $arResult["NAME"] ?>, <?= $arResult['DISPLAY_ACTIVE_FROM'] ?>
            ., <?= $arResult["PROPERTIES"]["POSITION"]["VALUE"] ?>, <?= $arResult["PROPERTIES"]["COMPANY"]["VALUE"] ?>.
        </div>
    </div>
    <? if ($arResult["DETAIL_PICTURE"]): ?>
        <div style="clear: both;" class="review-img-wrap"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                                                               alt="img">
        </div>
    <? else: ?>
        <div style="clear: both;" class="review-img-wrap"><img src="/upload/no_photo.jpg" alt="img">
        </div>
    <? endif; ?>
</div>
<? if ($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]): ?>
    <div class="exam-review-doc">
        <p>Документы:</p>
        <? if (count($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]) - count($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"], COUNT_RECURSIVE)): ?>
            <? foreach ($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"] as $values): ?>
                <div class="exam-review-item-doc">
                    <img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/pdf_ico_40.png"><a
                            href="<?= $values["SRC"] ?>" download=""><?= $values["ORIGINAL_NAME"] ?></a>
                </div>
            <? endforeach; ?>
        <? else: ?>
            <div class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/pdf_ico_40.png"><a
                        href="<?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"] ?>"
                        download=""><?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["ORIGINAL_NAME"] ?></a>
            </div>
        <? endif ?>


    </div>
<? endif ?>
<hr>
