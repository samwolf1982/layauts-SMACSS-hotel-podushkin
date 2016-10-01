
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
     <script src="assets/js/bootstrap-tokenfield.js"></script>

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

<!-- свернуть развернуть в news.php -->
    <script>
  $('.news_colapse').click(function (e){
  var chevState = $(e.target).siblings("i.indicator").toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
 
 
  if( $(this).hasClass('collapsed')){
    $(this).text('').append('Свернуть <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>');
 /*$("i.indicator").not(chevState).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");*/
  }else{
      $(this).text('').append('Развернуть <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>');
    /* $("i.indicator").not(chevState).removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");*/
  }
 
});
</script>


<!-- fiter hotel list -->

<script>

  

  function fillfileld() {
    // body...
    
       $('#tokenfield').tokenfield('createToken', 'purple');
       $('#tokenfield').tokenfield();

  }
</script>


    </body></html>