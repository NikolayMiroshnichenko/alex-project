<!DOCTYPE html>
<html lang="en">
<head>
              <!-- Google Tag Manager -->
      <script>
         (function(w, d, s, l, i) {
             w[l] = w[l] || [];
             w[l].push({
                 'gtm.start': new Date().getTime(),
                 event: 'gtm.js'
             });
             var f = d.getElementsByTagName(s)[0],
                 j = d.createElement(s),
                 dl = l != 'dataLayer' ? '&l=' + l : '';
             j.async = true;
             j.src =
                 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
             f.parentNode.insertBefore(j, f);
         })(window, document, 'script', 'dataLayer', 'GTM-PP4TLCR');
      </script>
      <!-- End Google Tag Manager -->

      <meta charset=UTF-8>
      <title>4-х недельный практический онлайн курс Messenger Marketing для начинающих - начало оплаты</title>
      <meta content=ru http-equiv=content-language>
      <meta content="Научитесь продавать все что угодно с помощью facebook, viber, telegram" name=description>
      <meta content="чат-боты, чат бот, manychat курс, Божок Александр, smartsender курс, курс smartsender, Александр Божок обучение" name=keywords>
      <meta content="4-х недельный практический онлайн курс Messenger Marketing для начинающих" property=og:title>
      <meta content=website property=og:type>
      <meta content=img/title.jpg property=og:image>
      <meta content="Научитесь продавать все что угодно с помощью facebook, viber, telegram" property=og:description>
      <meta content="width=device-width,user-scalable=no" name=viewport id=viewport>
      <link href=favicon.ico rel="shortcut icon" type=image/x-icon>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/intlTelInput.css">

    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
</head>
<body class="max-container">
    <section class="main-form-wrapper">
        <header class="header container">
            <a href="index.html" class="logo">Messenger Marketing</a>
            
            <div class="header-contacts">
                <a href="#" class="header-contacts__numbers">+38 (044) 233 71 36</a>
                <p class="header-contacts__text">Всегда на связи</p>

            </div>
        </header>
        <div class="main-form container">
            <div class="main-form-poligon"></div>
            <div class="main-form-table"></div>
            <div class="main-form-frame"></div>
            <div class="step">
                <div class="step-item step-item-activ">Шаг 1</div>
                <div class="step-item">Шаг 2</div>
            </div>
            <div class="main-content">
                <h1 class="main-conent__title">Для того чтобы принять участие
                    в пакете <span><?php echo $_POST['namecourse']; ?></span> </h1>
            </div>
            <form class="form payform">
                <input type="hidden" name="cookfb" value="<?php echo $_COOKIE['_fbp'] != '' ? $_COOKIE['_fbp'] : 'Нет' ;?>">
                <input type="hidden" name="utm_source" value="<?php echo isset($_POST['utm_source']) ? $_POST['utm_source'] : '' ;?>">
                <input type="hidden" name="utm_medium" value="<?php echo isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '' ;?>">
                <input type="hidden" name="utm_campaign" value="<?php echo isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '' ;?>">
                <input type="hidden" name="utm_content" value="<?php echo isset($_POST['utm_content']) ? $_POST['utm_content'] : '' ;?>">
                <input type="hidden" name="utm_term" value="<?php echo isset($_POST['utm_term']) ? $_POST['utm_term'] : '' ;?>">
                <input type="hidden" name="price" value="<?php echo $_POST['price'];?>">
                <input type="hidden" name="namecourse" value="<?php echo $_POST['namecourse'];?>">
                <h2 class="form-title">Введите свои данные ниже</h2>
                <div class="input-list">
                    <div class="input-block">
                        <input type="text" class="input" name="name" required="" placeholder="Имя...">
                    </div>
                    <div class="input-block"><input type="email" name="email" class="input" required="" placeholder="E-mail..."></div>
            
                    <div class="input-block">
                        <input type="tel" class="input" id="phone" name="phone" required="" placeholder="Номер телефона...">
                    </div>
                    
                </div>
                <button class="form-btn btn" type="submit">Принять участие</button>
            </form>
        </div>
        
    </section>
    <footer class="footer">
         <ul class="footer-list">
            <li class="footer-list__item">
               <a href="usloviya.pdf">Условия оказания услуг</a>
            </li>
            <li class="footer-list__item">
               <a href="politika.pdf">Политика Конфидициальности</a>
            </li>
            <li class="footer-list__item">
               <a href="usloviya.pdf">Условия возврата</a>
            </li>
            <!--             <li class="footer-list__item">
               <a href="#">Предупреждение</a>
               </li>
               <li class="footer-list__item">
               <a href="#">Условия предзаказа услуг</a>
               </li>
               <li class="footer-list__item">
               <a href="#">Поставщики</a>
               </li> -->
         </ul>
         <div class="footer-icons">
            <ul class="footer-social-list">
               <li class="social-list__item">
                  <a class="social-link social-link-master">Master Card</a>
               </li>
               <li class="social-list__item">
                  <a class="social-link social-link-visa">visa</a>
               </li>
            </ul>
            <ul class="footer-social-list">
               <li class="social-list__item">
                  <a href="https://www.facebook.com/ProTargeting.team" class="social-link social-link-fb">fb</a>
               </li>
               <li class="social-list__item">
                  <a href="https://www.instagram.com/protargeting_team/" class="social-link social-link-instargram">instagram</a>
               </li>
               <li class="social-list__item">
                  <a href="https://www.youtube.com/channel/UC-bvFPknEoyrKJODy2rKJAQ?view_as=subscriber" class="social-link social-link-youtube">youtube</a>
               </li>
            </ul>
         </div>
         <p class="footer-text">© Александр Божок & ProTargeting. Все права защищены. Любое копирование материалов
            разрешено
            только с согласия правообладателей. По всем вопросам обращайтесь: <a href="">info@protargeting.team</a>
         </p>
      </footer>
    <script src="js/jquery.js"></script>
    <script src="js/intlTelInput.js"></script>

    <script src="js/input.js"></script>
    <script src="js/main.js?v=<?php echo number_format(round(microtime(true)*10),0,'.',''); ?>"></script>
              <!-- Google Tag Manager (noscript) -->
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP4TLCR" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <!-- End Google Tag Manager (noscript) -->
</body>
</html>