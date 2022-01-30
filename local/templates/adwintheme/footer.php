<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
 <footer class="block-footer">
            <div class="footer-container footer-container-top">
                <div class="block-footer-nav">
                    <div class="block-footer__policity">
                        <div class="block-footer__logo">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/logofooter.php"
                            )
                        );?>
                            
                        </div>  
                        <p>Все права защещены, информация предоставленна исключительно <br> в ознакомительных целях.</p>
                        <p>Если кто-то отравился — мы тут не виноваты!</p>
                    </div>
                    <div class="block-footer__nav">
                        <div class="row">
                            <div class="column">
                                <h4>Рецепты</h4>
                                <ul>                                    
                                    <li>Закуски</li>
                                    <li>Супы</li>
                                    <li>Горячее</li>
                                    <li>Паста</li>
                                    <li>Ризотто</li>
                                    <li>Десерты</li>
                                    <li>Напитки</li>
                                </ul>
                            </div>
                            <div class="column">
                                <h4>Сообщество</h4>
                                <ul>                                    
                                    <li>Блог</li>
                                    <li>Предложить рецепт</li>
                                    <li>Спецпроекты</li>
                                    <li>Коллаборации</li>                                 
                                    <li>Партнёры</li>
                                    <li>Связаться с нами</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-container footer-bottom">
                
                    <div class="block-footer__social">
                         
                        <p>Будем на связи</p>
                        <div class="block-footer__icon">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/social.php"
                                )
                            );?>
                           
                        </div> 
                    
                    </div>
                    <div class="block-footer__info">
                        <div class="row">
                            <div class="column">
                                <h4>7000+ рецептов </h4>                                
                            </div>
                            <div class="column">
                                <h4>532 автора</h4>
                                
                            </div>
                        </div>
                    </div>
               
            </div> 
        </footer>
</body>
</html>