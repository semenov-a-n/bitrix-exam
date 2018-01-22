<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- /afisha box -->


</div>

</div>
<!-- /content -->
<!-- side -->

<div class="side">
    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "Y"
        )
    ); ?>
    <!-- side anonse -->
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => ""
        )
    ); ?>

    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?= SITE_TEMPLATE_PATH; ?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">�����!</div>
                    <p>��������� ����� ����� �� 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">���������</a>
            </div>
            <!-- /side action -->
        </div>
        <!-- footer rew slider box -->
        <div class="item-wrap">
            <div class="rew-footer-carousel">
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">������� ������</a></div>
                                <div class="pos-block">����������� ��������,"����+"</div>
                            </div>
                            <div class="text-block">�� ������� ������������ ����������� �����
                                ���������, � �����, ������� ������� ������ �� ����� �����������...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">������� ������</a></div>
                                <div class="pos-block">����������� ��������,"����+"</div>
                            </div>
                            <div class="text-block">�� �������� ������������ ����������� �����
                                ���������, � �����, ������� ������� ������ �� ����� �����������...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block">� ��������</div>
                <ul>
                    <li><a href="">������</a>
                    </li>
                    <li><a href="">����������� </a>
                    </li>
                    <li><a href="">�������</a>
                    </li>
                </ul>
            </div>
            <div class="item">
                <div class="title-block">������� �������</div>
                <ul>
                    <li><a href="">�����</a>
                    </li>
                    <li><a href="">���������</a>
                    </li>
                    <li><a href="">������� � �������</a>
                    </li>
                    <li><a href="">����� � ������</a>
                    </li>
                    <li><a href="">���������� ������</a>
                    </li>
                    <li><a href="">������</a>
                    </li>
                    <li><a href="">������� � �������</a>
                    </li>
                    <li><a href="">�������� � ��������</a>
                    </li>
                    <li><a href="">����������</a>
                    </li>
                    <li><a href="">�������� ������</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="contacts-block">
            <div class="title-block"><?= GetMessage("INFO"); ?></div>
            <div class="loc-block">
                <div class="address">��. ������, ���.12, ���� 512</div>
                <div class="phone"><a href="tel:84952128506">8 (495) 212-85-06</a>
                </div>
            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">��2000�-�2012 "��������� �������"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>
</html>