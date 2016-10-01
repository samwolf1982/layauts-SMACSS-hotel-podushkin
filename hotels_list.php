 <?php 
include_once 'nav.php';
  ?>
    <!-- heder menu end -->

    <div class="container-fluid quest_top naw_row reset_margin">
      <div class="row ">
        <div class="col-sm-3 col-md-3 col-lg-2">
          
        </div>
        <div class="col-sm-6 col-md-5  col-lg-4" >
<div class="breadcrumb_nav">
<ul class="breadcrumb reset_margin">
  <li><a href="#">Home</a></li>
  <li><a href="#">Private</a></li>
  <li><a href="#">Pictures</a></li>
  <li class="active">Vacation</li> 
</ul>
</div>
          </div>
          

          <div class="col-sm-2 col-md-3  col-lg-5 text-center">
            
            9999999
          </div>
              <div class="col-sm-1 col-md-1  col-lg-1 text-right">
            
            9999999
          </div>


        </div>
    </div>

        <!-- slider form -->
        <div class="container-fluid">
          <div class="row">

































      <?php include_once 'leftmenu.php'; ?>   

          <!-- end form -->
    



















          <div id="body_news" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2  main ">





     <div class="container text-center news_header">
            <div class="row">
              <div class="col-sm-4 search_form">

      <div class="col-sm-12 reset-form">
         <div class="col-sm-6 text-left" >
         <div class="wrap_filter_label"> <img src="images/filter/icon.png" alt="" title="" class="margin"  ></div></div>
         <div class="col-sm-6">
      
          <button  class="btn clear_button ">Сбросить<i class="fa fa-times"></i> </button> </div>
      </div>


     





 <div class="col-sm-12 searc_form">
  <form class="navbar-form" role="search">
<!--   search  -->
 <div class="col-sm-12 wrap_field">
   <div class="input-group add-on">
      <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
</div>
    <!-- end  search  -->
 <div class="col-sm-12 wrap_field">
       <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default set_pading" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
</div>
    <input type="text" class="form-control" id="tokenfield" value="red,green,blue" />

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

 </div>







              </div>
<!-- end filter -->

              <div class="col-sm-8   hotels_r ">Lorem ipsum dolor sit amet. <button class="btn" onclick="fillfileld();">go</button></div>
            </div>


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

<label class="news_colapse collapsed" data-toggle="collapse" data-target="#colaps<?=$v?>">Развернуть  <i class="indicator glyphicon glyphicon-chevron-down  pull-right "></i></label>
</div>
   </div>
<?php endforeach ?>












     <div class="row text-center">
<div class="col-sm-12">
<ul class="pagination news_pagionation">
  <li><a href="#">❮</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
   <li><a href="#">❯</a></li>
</ul>

</div>

   </div>

      

                






              </div>
              <!-- end wrap carusele -->

            </div>



    </div>
    <!-- end  main -->






    </div>
    </div>


<?php include_once 'footer.php'; ?>