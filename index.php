    <html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/yamm.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">


    <!-- ... -->


    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <style>
           @font-face {
             font-family: Franklin Gothic Book; /* Гарнитура шрифта */
             src: url(bootstrap/fonts/FRABK.ttf); /* Путь к файлу со шрифтом */

           </style>

         </head>

         <body>


          <!-- heder menu nav -->
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="row">
              <div class="col-sm-12">
                <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal nav-justified">


                  <li class="active"><a href="#htab_first" data-toggle="tab"><img src="images/home.png" alt="image" title="some" class="nav_img img-responsive"  >   </a></li>
                  <?php foreach ($arrayName = array('о гостиннице','бронирование','правила','гаринтии','наши игрушки','гостевая книга','скидки','новости','контакты'  ) as $key => $value): ?>
                   <li><a class="text-uppercase"  href="#htab<?=$key?>" data-toggle="tab"><?=$value?></a></li>
                 <?php endforeach ?>  


                 <li><a class="text-uppercase" href="#htab_last" data-toggle="tab">подбор номера</a></li>
               </ul>
               <div class="tab-content" id="tab-content">








                 <div role="tabpanel" class="tab-pane fade in active" id="htab_first">

                   <ul id="nav-tabs-wrapper_inner" class="nav nav-tabs nav-tabs-horizontal nav-center" style="text-align: center;">
                    <div class="col-sm-1  col-md-2 col-lg-3"></div>
                    <div class="col-sm-10  col-md-8 col-lg-6 text-center">

                      <li class='nav_inner' ><a href="#hta" data-toggle="tab">Конфидициальность</a></li>
                      <li class='nav_inner'><a href="#ht" data-toggle="tab">Безопасность</a></li>
                      <li class='nav_inner'><a href="#ht3" data-toggle="tab">Сертификация</a></li>
                      <li class='nav_inner'><a href="#ht3" data-toggle="tab">Санитарный контроль</a></li>
                    </div>
                    <div class="col-sm-1  col-md-2 col-lg-3"></div>
                  </ul>
                </div>


                <?php foreach ($arrayName = array('о гостиннице','бронирование','правила','гаринтии','наши игрушки','гостевая книга','скидки','новости','контакты','подбор номера'  ) as $key => $value): ?>

                  <div role="tabpanel" class="tab-pane fade" id="htab<?=$key?>">

                   <ul id="nav-tabs-wrapper_inner" class="nav nav-tabs nav-tabs-horizontal nav-center" style="text-align: center;">
                    <div class="col-sm-1 col-md-2 col-lg-3"></div>
                    <div class="col-sm-10 col-md-8 col-lg-6">
                      <li class='nav_inner' ><a href="#hta" data-toggle="tab">Конфидициальность</a></li>
                      <li class='nav_inner'><a href="#ht" data-toggle="tab">Безопасность</a></li>
                      <li class='nav_inner'><a href="#ht3" data-toggle="tab">Сертификация</a></li>
                      <li class='nav_inner'><a href="#ht3" data-toggle="tab">Санитарный контроль</a></li>
                    </div>
                    <div class="col-sm-1 col-md-2 col-lg-3"></div>
                  </ul>
                </div>

              <?php endforeach ?>  

              <div role="tabpanel" class="tab-pane fade" id="htab_last">

               <ul id="nav-tabs-wrapper_inner" class="nav nav-tabs nav-tabs-horizontal nav-center" style="text-align: center;">
                <div class="col-sm-1  col-md-2 col-lg-3"></div>
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <li class='nav_inner' ><a href="#hta" data-toggle="tab">Конфидициальность</a></li>
                  <li class='nav_inner'><a href="#ht" data-toggle="tab">Безопасность</a></li>
                  <li class='nav_inner'><a href="#ht3" data-toggle="tab">Сертификация</a></li>
                  <li class='nav_inner'><a href="#ht3" data-toggle="tab">Санитарный контроль</a></li>
                </div>
                <div class="col-sm-1 col-md-2 col-lg-3"></div>
              </ul>
            </div>

            <!--  end nav meny -->

          </div>
        </div>
      </div>
    </div>

    <!-- heder menu end -->

    <div class="container-fluid quest_top">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2">
          
        </div>
        <div class="col-sm-6 col-md-5  col-lg-4" >
          <span class="add-on input_text_up"><i class="material-icons" style="font-size:36px">place</i></span> 

          <span class="quest lead strong">Вы в Москве?</span>
          <button class="btn btn_yes" type="submit">Да</button>
          <button class="btn btn-default btn_yes2" type="submit">Уточнить</button></div>
          <div class="col-sm-3 col-md-4  col-lg-6"></div>

        </div>
    </div>

        <!-- slider form -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-lg-2 sidebar text-center">
               <div class="row no-marginlr">
            <div class="col-sm-12 text-right hide_button">
 <button class="btn btn_yes hide_button btn_arrow" type="submit"></button>
            </div>
               </div>


<div class="row ">
                <div class="col-sm-1 "></div> 
                <div class="col-sm-10 ">   
              <a href="/" >  <img src="images/logo_big.png" img-responsive class="imagelogo" alt="" title="" /></a>
              <br><br>
              <div class="single_contact">
                Единый контaкт<br>
                <div class="telefone ">
                  <a href="tel:+74952212238"> + 7 (495) 221-223-8</a>
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">     
                <select class="form-control">
                 <option value="" disabled selected hidden>Выберете отель</option>
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
               </select>


               <span>Ближайший отель:  <a href="#" class="broni_a">Проспект Мира</a></span>
               <!-- data -->
               <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" placeholder="Дата заезда" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>



              <div class="container-fluid ">
                <div class="row">
                  <div class="col-sm-6 no-margin">    <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control"  placeholder="Время заезда" />
                    <span class="input-group-addon">
                     <span class="glyphicon glyphicon-time"></span>
                   </span>
                 </div></div>
                 <div class="col-sm-6 no-margin">
                  <div class='input-group date' id='datetimepicker4'>
                    <input type='text' class="form-control" placeholder="Длительность" />

                  </div>

                </div>



              </div>

            </div>
            <div class="container-fluid "> 
              <div class="row">

                <div  class="col-sm-6 no-margin"><input type="text" class="form-control form-control-inline" placeholder="Цена от">
                </div>
                <div class="col-sm-6 no-margin"><input type="text" class="form-control form-control-inline" placeholder="Цена до">
                </div>



              </div>

            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 no-margin">
                  <button id="max-button" type="submit" class=" btn btn-primary ">Забронировать</button> 
                </div>
                <br>
                  <div class="col-sm-12 no-margin text-left">
                  <a href="#" class="broni_a">Расширеный поиск </a>
                </div>
              </div>
            </div>

<br>
<br>
<br>
<div class="container-fluid">
  <div class="row text-center">

  <div class="col-sm-12"><p>
                        <h4 class="">Мы в соцсетях</h4>

                        <?php foreach ($arrayName = array('f','vk','ok','in','g','mm' ) as $key => $v): ?>
                          <a class="invert" target="_blank" href="#"><img src="images/soc/<?=$v;?>.png" alt="" width="15" height="15"></a>
                        <?php endforeach ?>


               </p> 
<br>
<br>
<br>
               </div>

 <h4 class="">Наше приложение</h4>
   <div class="col-sm-6 ">

  <a href="#">  <img  alt="" class=" apple_image" src="images\store\storeapple.svg"></a>
    </div>
    <div class="col-sm-6 ">
   <a href="#"> <img class="googl_play_image" src="https://play.google.com/intl/en_us/badges/images/generic/en-play-badge.png"></a>
    </div>
    </div>
</div>


          </div>  
    </div>
                    <div class="col-sm-1 "></div>
          </div>  
          </div>  
          <!-- end form -->
             
          <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2  main ">




            <div class="container no-margin max_w">
              <div class="row">


                <div id="carousel-example-generic" class="carousel  slide" data-ride="carousel">
                  <!-- Маркеры слайдов -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Содержимое слайдов -->
                  <div class="carousel-inner"  role="listbox" >
                    <div class="item active">
                      <img src="images/slider1.png" alt="..." class="max_w" >
                      <div class="carousel-caption">
                        <h3>Россия (Москва)</h3>
                        <p>Где это видано, чтобы люди в Москве без прописки проживали.</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="images/slider2.png" alt="..." class="max_w" >
                      <div class="carousel-caption">
                        <h3>Осень</h3>
                        <p>Осень — это вторая весна, когда каждый лист — цветок.</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="images/slider3.png" alt="..." class="max_w">
                      <div class="carousel-caption">
                        <h3>Дождь</h3>
                        <p>Осень опять идут дожди...</p>
                      </div>
                    </div> 
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>

                






              </div>
              <!-- end wrap carusele -->

            </div>

            <!-- продукт плюс карта  -->
            <div class="container no-margin max_w">
              <div class="row">
                <div id="map-prod" class=" prod col-sm-12 col-md-12 col-lg-5 text-center">
                 <br>
                 <p  class="header_prod">Показаны ближайшие к вам гостиницы </p>
                 <!-- продукты заполнение старт -->
                 <?php foreach ($arrayName = array('cold_li','text-danger','text-success','brown_li' ) as $key => $v): ?>

                  <div class="wrap_prod">
                   <div class="col-sm-12">
    <hr>

                    <div class="media media_up">
                      <div class="media-left">
                       <img src="images/prod.png" alt="" class="prod_img" class="media-object">
                     </div>
                     <div class="media-body">

                      <ul class="nav nav-pills nav-stacked address">
                        <li><a href="#" alt="" title="" class="header_prod" >Проспект Мира  </a></li>
                        <li ><a class="<?=$v;?> header_prod_sm no_padinglr"  href="#" alt="" title="" >м. Проспект Мира</a></li>
                        <li><a href="#" alt="" title="" class=" no_padinglr text-muted header_prod_sm  " > Малый Златоустинский пер, д. 2 </a></li>
                        <li><a href="#" alt="" title="" class="header_prod" >от 750u/час*  </a></li>
            
                      </ul>

                    </div>

                  </div>
                </div>
              </div>

            <?php endforeach ?>

          </div>
          <!-- продукты заполнение конец -->
          <!-- карта начало -->
          <div id="map-container"  class="col-sm-12 col-md-12 col-lg-7">

          </div>
          <!--     карта конец -->
        </div>
      </div>
      <!-- продукт плюс карта  конец -->


      <!-- новости и акции  -->
      <div class="container news_action max_w text-center ">
        <div class="row no-marginlr" id="wrap_prod_map">
          <div class="col-sm-12 text-center">
            <h2 class="text-uppercase hews_action_header" >Новости и акции</h2>
          </div>
          <div class="row ">


           <?php foreach (range(0,2) as $key => $value): ?>
            <div class="col-sm-4">

             <img src="images/action1.png" class="img-responsive margin" style="width:100%" alt="Image">
             <div class="action_image text-center"> <br> <p class="text-uppercase white_text">Конфидициальность гарантироварна</p>
               <p class="hews_action_normal_text">Администрация гарантирует неразглашение личных даных посетителей</p></div>



             </div>
           <?php endforeach ?>

         </div>
       </div>
     </div>

     <!-- новости и акции  end -->

     <div class="container text-center main_text ">
      <header >
        <h1>"Подушкин" - первая в России сеть мини-гостиниц - отелей на час, удобно расположенных во всех районах Москвы, 
          с более чем доступным уровнем цен.
        </h1>
      </header>

      <article>
        <h2>
          "Подушкин" - первая в России сеть мини-гостиниц - отелей на час, удобно расположенных во всех районах Москвы, с более чем доступным уровнем цен. К услугам наших гостей удобные и недорогие номера на любой вкус и бюджет - от эконом-класса до уровня "премиум". Наши гостиницы созданы специально для тех, кто нуждается в уединении на несколько часов в уютном номере со всеми удобствами, для конфиденциальных встреч и интимных свиданий. Дежурные администраторы по Вашей просьбе примут на хранение ценности, вызовут такси, закажут в номер еду с доставкой и, по возможности, пойдут навстречу любым Вашим пожеланиям. Мы гарантируем нашим гостям полную безопасность и конфиденциальность, не задаём лишних вопросов, не запоминаем лиц и имён. </h2> 
          <br><p class="h2">
          Для поселения в "Подушкин" необходимо иметь паспорт или водительское удостоверение, а также регистрацию в Москве или Московской области. Мини-гостиницы "Подушкин" оказывают услуги по временному размещению гражданам, достигшим 18 лет.</p>
          <p class="h2">
            Для комфортного отдыха почасовые номера «Подушкина» щедро укомплектованы всем необходимым. 
            Гостям не приходится дополнительно платить за лишнюю пару тапочек или халат, за бутылку воды, чашку кофе или пользование феном.
          </p><p class="h2">
          Услуги мини-отелей "Подушкин" сертифицированы и оказываются в полном соответствии с требованиями Роспотребнадзора. Наши номера всегда хорошо проветрены, а бельё — свежее. Во время пребывания у нас в гостях Вы защищены страховкой.Современная Москва предлагает своим гостям и жителям самые разнообразные услуги по аренде квартир, дешёвых комнат и гостиничных номеров с почасовой оплатой.  </p>



        </article>
      </div>



    </div>
    <!-- end  main -->






    </div>
    </div>
    <!-- end content  -->
    <!-- slider -->
      <!--   <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar text-center">
      
      
      
      
          </div>          </div>          </div>   -->
    <footer class="footer_page container-fluid">
      <div class="row text-center wrap_footer">  
             <div class="col-sm-2"> </div>
              <div class="col-sm-2">
    <div class="media text-center">
      <div class="media-top">
        <img src="images/footer_logo.png" class="media-object" style="width:80%; margin-left: 1em;">
      </div>
      <div class="media-body">
      <br><br>
        <div class="item">
                    <span class="icon glyphicon glyphicon-earphone" ></span>
                    +7 (495) 221-22-38
                </div>
    <br><br>
    <br>
    <br><br><br>
              <div class="">
                © 2016, Сеть гостиниц Подушкин
              </div>
      </div>
    </div>


               </div>
               <div class="col-sm-2"><p>
                <h4 class="text-uppercase">ГЛАВНАЯ СТРАНиЦА</h4>
      <ul class="nav nav-pills nav-stacked footer_nav">
        <li><a href="#">О гостинице</a></li>
        <li><a href="#">Правила</a></li>
        <li><a href="#">Гарантии</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
               </p> </div>
                  <div class="col-sm-2"><p>
                <h4 class="text-uppercase">ГОСТИНИЦЫ</h4>
      <ul class="nav nav-pills nav-stacked footer_nav">
        <li><a href="#">Подбор номера</a></li>
        <li><a href="#">О бронировании</a></li>
        <li><a href="#">Наши игрушки</a></li>
        <li><a href="#">Франшиза</a></li>
      
      </ul>
               </p> </div>
                         <div class="col-sm-2"><p>
                <h4 class="text-uppercase">ПОДБОР НОМЕРА</h4>
      <ul class="nav nav-pills nav-stacked footer_button ">
        <li><a class='text-uppercase'  href="#">Подбор номера</a></li>
      </ul>
                  <h4 class="text-uppercase">Отзывы</h4>
      <ul class="nav nav-pills nav-stacked footer_button ">
        <li><a class='text-uppercase' href="#">ОСТАВИТЬ ОТЗЫВ</a></li>
      </ul>
               </p> </div> 
                 <div class="col-sm-2"><p>
                        <h4 class="">Мы в соцсетях</h4>

                        <?php foreach ($arrayName = array('f','vk','ok','in','g','mm' ) as $key => $v): ?>
                          <a target="_blank" href="#"><img src="images/soc/<?=$v;?>.png" alt="" width="15" height="15"></a>
                        <?php endforeach ?>


               </p> </div>
       

        
      </div>


    </footer>




        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js\jsfromajax\js.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>


        <script type="text/javascript">
          $(function () {
            $('#datetimepicker1').datetimepicker();
          });
          $(function () {
            $('#datetimepicker3').datetimepicker({
              format: 'LT'
            });
            $('#datetimepicker4').datetimepicker({
              format: 'LT'
            });
          });



        </script>
        <script> 
         $(document).on('click', '.yamm .dropdown-menu', function(e) { e.stopPropagation()});

         $('#tab-content').mouseleave(function () {
          $('#tab-content').slideToggle();      
        });
      </script>

      <script type="text/javascript">
       $(function () {



       });

     </script>
     <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
     <script src="assets/js/vendor/holder.min.js"></script>
     <script src="assets/js/vendor/nav.js"></script>


     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
     <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
     <script> 

      function init_map() {
        var var_location = new google.maps.LatLng(45.430817,12.331516);

        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };

        var var_marker = new google.maps.Marker({
          position: var_location,
          map: var_map,
          title:"Venice"});

        var var_map = new google.maps.Map(document.getElementById("map-container"),
          var_mapoptions);

        var_marker.setMap(var_map); 

      }

      google.maps.event.addDomListener(window, 'load', init_map);

$(document).ready(function(){
   var h= $('#map-prod').css('height');
      $('#map-container').css('height',h);
          google.maps.event.trigger(map, "resize");
});

$( window ).resize(function() {
  var h= $('#map-prod').css('height');
      $('#map-container').css('height',h);
          google.maps.event.trigger(map, "resize");
});

     
    </script>




    </body></html>