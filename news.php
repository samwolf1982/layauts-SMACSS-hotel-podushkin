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
    



















          <div id="body_news" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2  main ">





     <div class="container text-center news_header">
      <header >
        <h1>Новости
        </h1>
      </header>

      <article>
        <h2>
         "Подушкин" - первая в России сеть мини-гостиниц - отелей на час, удобно расположенных во всех районах Москвы, с более чем доступным уровнем цен. К услугам наших гостей удобные и недорогие номера на любой вкус и бюджет - от эконом-класса до уровня "премиум". Наши гостиницы созданы специально для тех, 
кто нуждается в уединении на несколько часов в уютном номере со всеми удобствами, для конфиденциальных встреч и интимных свиданий. Но только в «Подушкине» Вас ждёт высокий уровень сервиса 
и гарантировано качественное обслуживание, которые нельзя найти в дешёвом отеле. 
Наши комнаты с почасовой оплатой, которые Вы можете снять не только на час, но и на всю ночь.
 </h2> 
    
        </article>
      </div>



            <div class="container no-margin max_w news_body">
           

              <?php foreach (range(0, 3) as $key => $v): ?>
                
          <div class="row news_list">
<div class="col-sm-3">
  <img src="images/action1.png" alt="" title="">

</div>
<div class="col-sm-9">
   <div class="col-sm-12 text-left"><span class="label label-default btn_yes news_data">10.06.2016</span> </div>
   <br>
   <h2>Акция «Подушкин-экспресс» продолжается!  </h2>
   <br>
   <p class="news_p">Предлагаем воспользоваться уникальной акцией и провести у нас в гостях ночь по цене трёх часов. Мы с радостью угостим Вас чаем или кофе, не потребуем доплаты за третьего гостя 
в номере. В стоимость поселения уже включена питьевая вода и коробка шоколадных конфет.Мы с радостью угостим Вас чаем или кофе, не потребуем доплаты.
</p>



<div id="colaps<?=$v?>" class="collapse">
<p class="news_p">
За каждое десятое посещение обойдётся вдвое дешевле. "Подушкин" - первая в России сеть мини-гостиниц - отелей на час, удобно расположенных во всех районах Москвы, с более чем доступным уровнем цен. К услугам наших гостей удобные и недорогие номера на любой вкус и бюджет - от эконом-класса до уровня "премиум". Наши гостиницы созданы специально для тех, кто нуждается в уединении на несколько часов в уютном номере со всеми удобствами, для конфиденциальных встреч и интимных свиданий. Но только в «Подушкине» Вас ждёт высокий уровень сервиса и гарантировано качественное обслуживание, которые нельзя найти в дешёвом отеле. Наши комнаты с почасовой оплатой, которые Вы можете снять не только на час, но и на всю ночь, укомплектованы приспособлениями для эротических игр.
</p>
</div>

<label class="news_colapse collapsed" data-toggle="collapse" data-target="#colaps<?=$v?>">Collapsible <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></label>
</div>
   </div>
<?php endforeach ?>














      

                






              </div>
              <!-- end wrap carusele -->

            </div>



    </div>
    <!-- end  main -->






    </div>
    </div>


<?php include_once 'footer.php'; ?>