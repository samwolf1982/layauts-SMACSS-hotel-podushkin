 <?php 
include_once 'nav.php';
  ?>
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

































      <?php include_once 'leftmenu.php'; ?>   

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


<?php include_once 'footer.php'; ?>