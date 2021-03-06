<?php 
/*session_start();
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];
session_id();
$newcena=1099; // Цена со скидкой
$valuta="грн";
$skidka=53;  // Процент скидки
$oldcena= floor(($newcena/(100-$skidka))*100); // Считаем цену без скидки*/
?>
<!DOCTYPE html>

   

<html>   
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Pages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
   <!--<script src="main.js"></script>-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
</head>
<body>
<div class="body_pages">
<div class="header">
    <div class="nav">
    
            <div class="logo">
                <img src="images/logo.png"> <h2 class="logo_text">Help Trade</h2>
            </div>
            <div class="title">
                    <i class="fas fa-chart-line fa-3x"></i>


                <p>Индивидуальные 
                        <span class="red"> консультации по трейдингу </span> каждый день для новичков и опытных трейдеров.</p>
            </div>
        
    </div>

<div class="right">
    <div class="call_me">
        <div class="call_me_block">
        <div class="blick">
            <img src="images/blick.png" alt="">
        </div>
        <div class="call_me_top">
           
            <div class="new_price">
                <p>Получить безплатный доступ</p>
            </div>

        </div>
        <form action="zakaz.php" method="post">
        <div class="call_me_form">
            <div class="form_name">
                <input type="text" class="input" name="name" id="name" placeholder="Введите ваше имя">
            </div>
            <div class="form_mail">
                <input type="email" class="input" name="mail" id="mail"  placeholder="Введите ваш email">
            </div>
            <div class="form_tel">
                <input type="text" class="input" name="tel" id="tel" placeholder="Введите ваш номер" onkeypress='validate(event)'>
            </div>

        </div>
        <div class="call_me_bottom">
            <div class="submit">
                <div class="sub_pre"><img src="images/sub_pre.png"></div><input  type="submit" name="sub" id="sub" value="Заказать сейчас">

            </div>
            <div class="call_me_bottom_info">
                <div class="call_me_blocked">
                    <img src="images/blocked.png" alt="">
                </div>
                <div class="call_me_bottom_text">
                    <p>Ваши данные под защитой SecureTECH</p>
                </div>
            </div>
        </div>
</form>
    </div>
    </div>
    <div class="header_number">
            <div class="header_number_block">
                <ul class="header_number_block">
                    <li class="header_number_li header_number_li_first"><p>0</p></li>
                    <li class="header_number_li header_number_li_second"><p>1</p></li>
                    <li class="header_number_li header_number_li_second"><p>0</p></li>
    
                </ul>
            </div>
    
            <div class="header_number_title">
                <p>*Всего осталось <br/> мест </p>
            </div>
    </div>
</div>

<div class="left">
    <div class="product">
       <div class="product_list">
           <ul class="product_ul">
               <li class="product_li product_li_border"><p>1</p></li>
               <li class="product_li"><p>2</p></li>
               <li class="product_li"><p>3</p></li>
               <li class="product_li"><p>4</p></li>
               <li class="product_li product_li_bottom"><p>5</p></li>
           </ul>
       </div>
    </div>
    <div class="header_text">
        <div class="header_text_title">
            <div class="header_text_p"> 
                <p class="title_text"> Основные </p>
                <p class="title_text_medium">7 шагов как  </p> 
                <p class="shag">защитить и  <br/>приумножить</p>
                <p class="title_text_small">ваши средства</p> 
            <p class="title_text_botton"> на фондовых рынках. 
            </p> </div>
        </div>
        <div class="header_text_info">
            <ul class="header_info_ul">
                <li class="header_info_li header_info_li_six"><img src="images/icon/Six.png" alt="" srcset=""></li>
                <li class="header_info_li header_info_li_nyse"><img src="images/icon/NYSE_Logo.png" alt="" srcset=""></li>
                <li class="header_info_li"><img src="images/icon/Tokyo_Stock_Exchange_logo.png" alt="" srcset=""></li>
            </ul>
        </div>
       <!-- <ul class="header_text_ul">
            <li class="header_text_li"><img src="images/li.png"><p>Мощная эрекция и потенция</p></li>
            <li class="header_text_li"><img src="images/li.png"><p>Мощная эрекция и потенция</p></li>
            <li class="header_text_li"><img src="images/li.png"><p>Мощная эрекция и потенция</p></li>
            <li class="header_text_li"><img src="images/li.png"><p>Мощная эрекция и потенция</p></li>

        </ul>-->
    </div>
</div>
</div>
<div class="block2">
    <div class="block2_right">
        <div class="block2_video">
              <!--  <iframe width="100%" height="400px" src="https://www.youtube.com/embed/7wtfhZwyrcc" frameborder="0" allowfullscreen></iframe>
              -->
              <div class="graf">
              <img src="images/graf.png" alt="">
            </div>
            </div>
    </div>
    <div class="block2_left">
        <div class="block2_left_wrop">
        <div class="block2_left_info">
            <div class="block2_left_title"> <p> <span class="block2_left_title_top">Успейте получить</span> </p></div>
            <div class="block2_left_clock">
                <script src="http://megatimer.ru/s/31bcf8d18e077803ab569327a6f42211.js"></script>     </div>
            <div class="block2_left_text"> <p> <span class="block2_left_bottom"> Бесплатную консультацию</span>  <span class="block2_left_title_bottom"><br/> прямо сейчас
            </span></p></div>

        </div>
        <div class="block2_link">
            <ul class="block2_link_ul">
                <li class="block2_link_li"> <img src="images/icon/facebook.png" alt=""> </li>
                <li class="block2_link_li"><img src="images/icon/twitter.png" alt=""></li>
                <li class="block2_link_li"><img src="images/icon/lin.png" alt=""></li>
                <li class="block2_link_li"><img src="images/icon/instagram.png" alt=""></li>
                <li class="block2_link_li"><img src="images/icon/google_plus.png" alt=""></li>
                <li class="block2_link_li"><img src="images/icon/skype.png" alt=""></li>
            </ul>
        </div>

    </div>
    </div>
</div>
<div class="block3">
    <div class="block3_left">
        <div class="block3_left_title">
            <div class="block3_left_grid">
                <p class="block3_left_top">  Ваш</p>
                <p class="block3_left_center"> Готовый</p>
                <p class="block3_left_bottom">План</p>
            </div>
        </div>

    </div>
    <div class="block3_right">

        
        <div class="block3_right_text">
            <p>План того, ЧТО делать и КАК делать, чтобы вы могли приумножит cвой капитал. Вы или внедрите это, или будете дальше наблюдать как Ваши соседи снимают все сливки.


            </p>
        </div>


       
    </div>
</div>
<div class="block4">
    <div class="block4_left">
        <div class="block4_left_info">
            <div class="block4_left_text">
                <ul class="block4_left_ul">
                    <li class="block4_left_text_top">
                        <p>   </p>
                    </li>
                    <li class="block4_left_text_center">
                        <p>Влад </p>
                    </li>
                    <li class="block4_left_text_bottom">
                        <p>Бойко</p>
                    </li>
                    <li class="block4_left_text_small">
                        <p>Трейдер и Аналитик</p>
                    </li>
                </ul>
            </div>
            <div class="block4_right_left_info">
                <ul class="block4_right_ul">
                    <li class="block4_right_li">
                            <i class="fas fa-star-of-life"></i>
                            <p><b>7 лет в Трейдинге</b></p>
                    </li>
                    <li class="block4_right_li">
                        <i class="fas fa-star-of-life"></i>
                        <p><b>470 проведённых консультации</b></p>
                    </li>
                    <li class="block4_right_li">
                        <i class="fas fa-star-of-life"></i>
                        <p><b>97 % точности торговых сигналов по Форексу</b></p>
                    </li>
                    <li class="block4_right_li">
                            <i class="fas fa-star-of-life"></i>
                            <p><b>390 обученых професиональных брокеров </b></p>
                        </li>
                    
                </ul>
            </div>   
        </div>
    </div>
   <div class="block4_right">
        <!-- <div class="block4_right_info">
            <ul class="block4_right_ul">
                <li class="block4_right_li">
                        <i class="fas fa-star-of-life"></i>
                        <p><b>7 лет в Трейдинге</b></p>
                </li>
                <li class="block4_right_li">
                    <i class="fas fa-star-of-life"></i>
                    <p><b>470 проведённых консультации</b></p>
                </li>
                <li class="block4_right_li">
                    <i class="fas fa-star-of-life"></i>
                    <p><b>97 % точности торговых сигналов по Форексу</b></p>
                </li>
                <li class="block4_right_li">
                        <i class="fas fa-star-of-life"></i>
                        <p><b>390 обученых професиональных брокеров </b></p>
                    </li>
                
            </ul>
        </div>   -->
     <div class="block4_right_foto">
        <img src="images/3231-2.png" alt="" >
    
    </div>
    </div>

</div>
<div class="block5">
        <div class="block5_left">
                <div class="block5_left_info">
                    <div class="block5_left_text">
                        <ul class="block5_left_ul">
                            <li class="block5_left_text_top">
                                <p>Какие конкретные</p>
                            </li>
                            <li class="block5_left_text_center">
                                <p>шаги</p>
                            </li>
                            <li class="block5_left_text_bottom">
                                <p>рассмотрим</p>
                            </li>
                            <li class="block5_left_text_small">
                                <p>на консультации?</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block5_right">
                <div class="block5_right_info">
                    <ul class="block5_right_left_ul">
                        <li class="block5_left_li">
                                <div class="block5_left_li_num"> <p>5</p> </div>
                                <p>Советы увеличения дохода для трейдеров</p>
                        </li>
                        <li class="block5_left_li">
                                <div class="block5_left_li_num"> <p>6</p> </div>
                            <p>Эффективная стратегия для торговли на фондовых рынках</p>
                        </li>
                        <li class="block5_left_li">
                                <div class="block5_left_li_num"> <p>7</p> </div>

                            <p>Форекс сигналы и их использования на практике</p>
                        </li>

                    </ul>


                    <ul class="block5_right_ul">
                            <li class="block5_right_li">
                                    <div class="block5_left_li_num"> <p>1</p> </div>
                                    <p>Что такое фондовые рынки?</p>
                            </li>
                            <li class="block5_right_li">
                                    <div class="block5_left_li_num"> <p>2</p> </div>
                                <p> Выбор надежного брокера</p>
                            </li>
                            <li class="block5_right_li">
                                    <div class="block5_left_li_num"> <p>3</p> </div>
                                <p>Заработок на фондовых рынках</p>
                            </li>
                            <li class="block5_right_li">
                                    <div class="block5_left_li_num"> <p>4</p> </div>
                                <p>Правильное оформление вывода средств</p>
                            </li>
                        </ul>
                </div>   

</div>
</div>
<div class="footer">

</div>
</div>
<script type="text/javascript">
       

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

   

   </script> 
</body>
</html>

