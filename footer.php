<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garant
 */

?>

	<!-- #page -->

<?php wp_footer(); ?>

<footer class="footer">
    <section id="contacts" class="section-bottom">
        <div class="container">

            <div class="marquee">
                <marquee behavior="scroll" direction="" class="blink">
                    <div id="mylist" class="garage-title blink-2"></div>#Ремонтцифровойтехники #Ремонткомпьютероввтомске #Ремонтноутбуковвтомске #Сервисныйцентртомск #Ремонттелефоноввтомске #Ремонтпланшетоввтомске #Ремонтмонитороввтомске #Ремонттелевизороввтомске
                </marquee>
            </div>

            <div class="footer-inner">
                <div class="footer-inner__left">

                    <div class="footer-inner__row">
                        <div class="footer-inner__title">Cоцсети</div>
                        <div class="telegram"><a href="https://t.me/+79521555026">Telegram</a></div>
                        <div class="whatsapp"><a href="https://wa.me/79521555026">Whatsapp</a></div>
                        <div class="vkonakte"><a href="https://vk.com/garanttomsk">Vkonakte</a></div>
                    </div>
                    
                </div>
                <div class="footer-inner__centr">

                    <div class="footer-inner__row">
                        <div class="footer-inner__title">Контакты</div>
                        <div class="street">г. Томск, Иркутский тракт 42, 2 Этаж</div>
                        <div class="namber-one"><a href="tel:89521555026">тел.: +7-952-155-50-26</a></div>
                        <div class="namber-two"><a href="tel:89521555026">тел.: +7 (3822) 20-26-57</a></div>
                    </div>
                    
                </div>
                <div class="footer-inner__right">

                    <div class="footer-inner__row">
                        <div class="form-box">
                            <form id="#" class="" action="<?php echo get_home_url() ?>/send.php" method="post">
                                <div class="form-box__item">
                                    <label class="form-box__label">Ваше имя</label>
                                    <input class="form-box__input" type="text" placeholder="Андрей" name="name" required>
                                </div>
                                <div class="form-box__item">
                                    <label class="form-box__label">Номер телефона</label>
                                    <input class="form-box__input" type="text" placeholder="+7(___) ___-__-__" name="phone" required>
                                </div>
                                <button class="form-box__but form-box__but_border btn">+ Отправить</button>
                                <p class="form-box__agreement">Нажимая кнопку “Отправить” Вы соглашаетесь на обработку Ваших данных</p>
                                <input type="hidden" name="act" value="order">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
            <div class="container">
                
                <div class="footer-inner">
                    <div class="footer-inner__left footer-inner__left_page">
                        <p class="footer-inner__copy">&copy <?php echo date('Y'); ?> «Гарант»</p>
                        <a data-fancybox data-src="#police" class="footer-inner__police" href="#">Политика конфиденциальности</a>
                        <p class="footer-inner__info">«Информация на сайте не является публичной офертой (ст. 437 ГК РФ)»</p>
                    </div>
                    <div class="footer-inner__right">
                        <a href="https://t.me/+79521555026">
                            <div id="marquee" class="marquee-site">
                                <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                                <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</footer>
<!-------------------------modal form----------------------------> 
</div>

<!-- <div class="blink-2" id="toTop">
    <buttomclass="toTop-buttom">
        <img src="<?php echo get_template_directory_uri() ?>/assests/img/btnl.png" alt="Назад" class="toTop-buttom__image">
    </buttom>
</div>


<form id="form-glow" class="form-glow form-glow__wrap" action="<?php echo get_home_url() ?>/send.php" method="post">

    <div class="border-box glow">

        <div class="form-box__item">
            <label class="form-box__label">Ваше имя</label>
            <input class="form-box__input" type="text" placeholder="Андрей" name="name" required>
        </div>
        <div class="form-box__item">
            <label class="form-box__label">Номер телефона</label>
            <input class="form-box__input" type="text" placeholder="+7(___) ___-__-__" name="phone" required>
        </div>
        <button class="form-box__but form-box__but_border btn" type="submit">+ Отправить</button>
        <p class="form-box__agreement">Нажимая кнопку “Отправить” Вы соглашаетесь на обработку Ваших данных</p>
        <input type="hidden" name="act" value="order">

    </div>

</form>

<div id="police" class="police">
    <div class="border-box glow police__glow">
        <div class="police__text">

            <h3>Политика в отношении обработки персональных данных</h3>

            <div class="police__content">
                <span>1. Общие положения Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые "Гарант" (далее – Оператор).</span>
                <span>1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</span>
                <span>1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://garant.tomskpro.ru.</span>
            </div>

            <div class="police__content">
                <h4>2. Основные понятия, используемые в Политике</h4>
                <span>2.1. Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;</span> 
                <span>2.2. Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);</span> 
                <span>2.3. Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу https://garant.tomskpro.ru;</span> 
                <span>2.4. Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;</span> 
                <span>2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;</span> 
                <span>2.6. Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</span> 
                <span>2.7. Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;</span> 
                <span>2.8. Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта https://garant.tomskpro.ru;</span> 
                <span>2.9. Пользователь – любой посетитель веб-сайта https://garant.tomskpro.ru; 
                <span>2.10. Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;</span> 
                <span>2.11. Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;</span> 
                <span>2.12. Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;</span> 
                <span>2.13. Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) уничтожаются материальные носители персональных данных.</span> 
            </div>

            <div class="police__content">
                <h4>3. Оператор может обрабатывать следующие персональные данные Пользователя</h4> 
                <span>3.1. Фамилия, имя, отчество;</span> 
                <span>3.2. Номера телефонов;</span> 
                <span>3.3. Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).</span> 
                <span>3.4. Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.</span>
            </div>

            <div class="police__content">
                <h4>4. Цели обработки персональных данных</h4> 
                <span>4.1. Цель обработки персональных данных Пользователя — заключение, исполнение и прекращение гражданско-правовых договоров.</span> 
                <span>4.2. Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты info@garant.tomskpro.ru с пометкой «Отказ от уведомлений о новых продуктах и услугах и специальных предложениях».</span> 
                <span>4.3. Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.</span>
            </div>

            <div class="police__content">
                <h4>5. Правовые основания обработки персональных данных</h4> 
                <span>5.1. Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте https://garant.tomskpro.ru. Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.</span> 
                <span>5.2. Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).</span>
            </div>

            <div class="police__content">
                <h4>6. Порядок сбора, хранения, передачи и других видов обработки персональных данных</h4>
                <span>Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.</span> 
                <span>6.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.</span>
                <span>6.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства.</span>
                <span>6.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора info@garant.tomskpro.ru с пометкой «Актуализация персональных данных».</span>
                <span>6.4. Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора info@garant.tomskpro.ru с пометкой «Отзыв согласия на обработку персональных данных».</span> 
            </div>

            <div class="police__content">
                <h4>7. Трансграничная передача персональных данных</h4> 
                <span>7.1. Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.</span>
                <span>7.2. Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.</span>
            </div>

            <div class="police__content">
                <h4>8. Заключительные положения</h4>
                <span>8.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты info@garant.tomskpro.ru.</span> 
                <span>8.2. В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.</span>
                <span>8.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу https://garant.tomskpro.ru/privacy-policy/</span>
            </div>
        
        </div>
    </div>
</div> -->


</body>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/slick.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/tabs.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/whtemobil.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/moblmenu1.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/cont-form.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/redAbout.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/anime.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/calc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"> -->

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/slide.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/run-num.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/button.js"></script> -->


</html>