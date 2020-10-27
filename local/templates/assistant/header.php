<!DOCTYPE HTML>
<html>

<head>
    <title>
        <?$APPLICATION->ShowTitle();?>
    </title>
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    
  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/tms-0.4.1.js"></script>
  <!-- demo -->
  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/demo.js"></script>
  <!-- end demo -->  
  <script src="<?=SITE_TEMPLATE_PATH;?>/js/highlight.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH;?>/js/html5.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH;?>/js/html-xml.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH;?>/js/css.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH;?>/js/javascript.js"></script>
  <script>
    hljs.tabReplace = '    ';
    hljs.initHighlightingOnLoad();
  </script>
  <?$APPLICATION->ShowHead();?>
</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="page">
        <div class="container">


            <header>
                <a class="logotype" href="/">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo.png" width="222" height="33" alt="описание" />
                </a>

                <nav>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                	    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"DELAY" => "N",	// Откладывать выполнение шаблона меню
                		"MAX_LEVEL" => "1",	// Уровень вложенности меню
                		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                			0 => "",
                		),
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        	       ),
                        	false
                        );?>       
                </nav>

                <div class="contacts">
                    г. Санкт-Петербург, ул. Невская<br />
                    дом 123, корпус 4, оф. 234-А<br />
                    <span>+7 (812) <b>234-43-43</b></span>
                </div>
            </header>

            <div class="it_asist"></div>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
	"AREA_FILE_SHOW" => "page",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
            
            <div class="it_asist"></div>

            <section>
                <aside class="left">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "left",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "left_article.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                </aside>

                <article>
                  <h1><?$APPLICATION->ShowTitle(false);?></h1><br />