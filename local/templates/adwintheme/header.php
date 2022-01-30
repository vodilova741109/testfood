<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>  

    <?php
        use \Bitrix\Main\Page\Asset;
        $APPLICATION->ShowHead();
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');   
        Asset::getInstance()->addCss('https://fonts.googleapis.com');   
        Asset::getInstance()->addCss('https://fonts.gstatic.com');   
        Asset::getInstance()->addCss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800&family=Roboto+Condensed:wght@300;400;700&display=swap');   
    ?>
      <?php
        Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');           
    ?> 
    <title><?php $APPLICATION->ShowTitle();?></title>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel()?></div>
    
        <header class="block-header">
            <div class="block-header__top block-flex">
       
            <div class="block-header__logo">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/logo.php"
                )
            );?>
                   
            </div>     
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "main_menu",	// Тип меню для первого уровня
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                );?>    
              
                <a href=""><button class="button__element d-none">Предложить рецепт</button></a>
                
              
                
                <div class="burger-menu">
                    <input id="menu-toggle" type="checkbox" />
                    <label class="menu-btn" for="menu-toggle">
                      <span></span>
                    </label>    
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "mobail_menu", Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "mobail_menu",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                    );?>
                     
                    
                  </div>               
            </div>
         
            <div class="container">
                <div class="block-text">
                    <h1 class="text__title">Новогодние рецепты со всего мира</h1>
                    <p class="text__subtitle">Для тех, кто даже в пылу дедлайнов и новогдней суеты ни на минуту не перестаёт хотеть есть — найдите рецепт по вкусу за пару кликов!</p>
                </div>
                <div class="block-cards block-flex">
                    <div class="card">
                        <img src="<?=SITE_TEMPLATE_PATH ;?>/img/header/01.png" alt="">
                        <h4>Основные блюда</h4>
                    </div>
                    <div class="card">
                        <img src="<?=SITE_TEMPLATE_PATH ;?>/img/header/02.png" alt="">
                        <h4>Десерты</h4>
                    </div>    
                    <div class="card">
                        <img src="<?=SITE_TEMPLATE_PATH ;?>/img/header/03.png" alt="">
                        <h4>Напитки</h4>
                    </div>
                </div>
            </div>
           
        </header>