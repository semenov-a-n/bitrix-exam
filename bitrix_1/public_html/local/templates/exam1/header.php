<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/reset.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/owl.carousel.css'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.min.js') ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js') ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/scripts.js') ?>
    <link rel="icon" type="<?= SITE_TEMPLATE_PATH; ?> . /image/vnd.microsoft.icon" href="favicon.ico">
</head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">��������� �������</a>
            </div>
            <div class="main-phone-block">
                <? if (date("H") >= 9 && date("H") < 18): ?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <? else: ?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                <? endif; ?>
                <div class="shedule">����� ������ � 9-00 �� 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="�����">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <ul>
                        <li class="att popup-wrap">
                            <a id="hd_singin_but_open" href="" class="btn-toggle">����� �� ����</a>
                            <form action="/" class="frm-login popup-block">
                                <div class="frm-title">����� �� ����</div>
                                <a href="" class="btn-close">�������</a>
                                <div class="frm-row"><input type="text" placeholder="�����"></div>
                                <div class="frm-row"><input type="password" placeholder="������"></div>
                                <div class="frm-row"><a href="" class="btn-forgot">������ ������</a></div>
                                <div class="frm-row">
                                    <div class="frm-chk">
                                        <input type="checkbox" id="login">
                                        <label for="login">��������� ����</label>
                                    </div>
                                </div>
                                <div class="frm-row"><input type="submit" value="�����"></div>
                            </form>
                        </li>
                        <li><a href="">������������������</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
        "ALLOW_MULTI_SELECT" => "N",    // ��������� ��������� �������� ������� ������������
        "CHILD_MENU_TYPE" => "left",    // ��� ���� ��� ��������� �������
        "DELAY" => "N",    // ����������� ���������� ������� ����
        "MAX_LEVEL" => "3",    // ������� ����������� ����
        "MENU_CACHE_GET_VARS" => array(    // �������� ���������� �������
            0 => "",
        ),
        "MENU_CACHE_TIME" => "3600",    // ����� ����������� (���.)
        "MENU_CACHE_TYPE" => "N",    // ��� �����������
        "MENU_CACHE_USE_GROUPS" => "Y",    // ��������� ����� �������
        "ROOT_MENU_TYPE" => "top",    // ��� ���� ��� ������� ������
        "USE_EXT" => "N",    // ���������� ����� � ������� ���� .���_����.menu_ext.php
    ),
        false
    ); ?>

    <? if ($APPLICATION->GetCurPage() !== '/'): ?>
        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "bread_crumbs", Array(
            "PATH" => "",    // ����, ��� �������� ����� ��������� ������������� ������� (�� ���������, ������� ����)
            "SITE_ID" => "s1",    // C��� (��������������� � ������ ������������� ������, ����� DOCUMENT_ROOT � ������ ������)
            "START_FROM" => "0",    // ����� ������, ������� � �������� ����� ��������� ������������� �������
        ),
            false
        ); ?>
        <!--        <div class="breadcrumbs-box">-->
        <!--            <div class="inner-wrap">-->
        <!--                <a href="">�������</a>-->
        <!--                <a href="">������</a>-->
        <!--                <span>�������� � �������</span>-->
        <!--            </div>-->
        <!--        </div>-->


    <? endif; ?>

    <!-- /nav -->
    <!-- page -->

    <div class="page">

        <!-- content box -->
        <div class="content-box">
            <!-- content -->

            <div class="content">

                <div class="cnt">
                    <? if ($APPLICATION->GetCurPage() == '/'): ?>
                        <header>
                            <h1>��������� ��������</h1>
                        </header>
                        <hr>
                        <p>���������� ��������� ������������ ������������ ������ �� �������������� ������������ �
                            ����������� ����������� ���� ������� �����, ��� ��������� ���������� ������� �������� �����
                            ���������. ������� ���������������� ������� ��� ��������� � ��������������� ���������, ��� �
                            ����� ������� ��������� ���������� ���������� ������������ ������� � �������������� ������ �
                            � ������.
                        </p>


                        <!-- index column -->
                        <div class="cnt-section index-column">
                            <div class="col-wrap">

                                <!-- main actions box -->
                                <div class="column main-actions-box">
                                    <div class="title-block">
                                        <h2>�������</h2>
                                        <hr>
                                    </div>
                                    <div class="items-wrap">
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    ������� �����!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH; ?>/img/new01.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">������� ����� "�������", � �������
                                                            ������� ��������� � ������.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    ������� �����!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH; ?>/img/new02.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">������� ����� "�������", � �������
                                                            ������� ��������� � ������.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    ������� �����!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH; ?>/img/new03.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">������� ����� "�������", � �������
                                                            ������� ��������� � ������.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="btn-next">��� �������</a>
                                </div>
                                <!-- /main actions box -->
                                <!-- main news box -->
                                <div class="column main-news-box">
                                    <div class="title-block">
                                        <h2>�������</h2>
                                    </div>
                                    <hr>
                                    <div class="items-wrap">
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 ������� 2012</a>
                                                </div>
                                                <div class="text"><a href="">����������� ������ ������� ������ ��
                                                        �������� </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 ������� 2012</a>
                                                </div>
                                                <div class="text"><a href="">������-����� ���������� �� ������ ���
                                                        �������������� ������ </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 ������� 2012</a>
                                                </div>
                                                <div class="text"><a href="">����������� ������ ������� ������ ��
                                                        �������� </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 ������� 2012</a>
                                                </div>
                                                <div class="text"><a href="">���� ��������� ���� ����������� ������
                                                        ����������� ����� ������� �������� � ������ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="btn-next">��� �������</a>
                                </div>
                                <!-- /main news box -->

                            </div>
                        </div>
                        <!-- /index column -->

                        <!-- afisha box -->
                        <div class="cnt-section afisha-box">
                            <div class="section-title-block">
                                <h2 class="second-ttile">��������� �����������</h2>
                                <a href="" class="btn-next">��� �����������</a>
                            </div>
                            <hr>
                            <div class="items-wrap">
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 ������� 2012, ������</a>
                                        </div>
                                        <div class="text"><a href="">������� �������������� ������ ������ � ���,
                                                ���������� ���������.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 ������� 2012, ������</a>
                                        </div>
                                        <div class="text"><a href="">�������� ���-���� �� ������� ���������. ���������
                                                ������ � ������� ������������.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 ������� 2012, ������</a>
                                        </div>
                                        <div class="text"><a href="">�������� ������ �������� � ����� ���������
                                                ����.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>

