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


  <link rel="stylesheet" href="bootstrap/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

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
                   <?php foreach ($arrayName = array('о гостиннице','бронирование','правила','гаринтии','наши игрушки','гостевая книга','скидки','новости','контакты','подбор номера'  ) as $key => $value): ?>
                       <li><a  href="#htab<?=$key?>" data-toggle="tab"><?=$value?></a></li>
                    <?php endforeach ?>  
        
          
              <li><a href="#htab_last" data-toggle="tab">LAst</a></li>
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

<div class="container-fluid">
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-3">
    <span class="add-on"><i class="material-icons" style="font-size:36px">place</i></span><input class="span2" id="prependedInput" size="16" type="text" placeholder="Username">
  <button class="btn btn-default" type="submit">Кнопка</button><button class="btn btn-default" type="submit">Кнопка</button></div>
  <div class="col-sm-7"></div>

</div></div>

<!-- slider -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar text-center">

            <a href="/" >  <img src="images/logo_big.png" img-responsive class="imagelogo" alt="" title="" /></a>
            <div class="single_contact">
              Единый контaкт<br>
              <div class="telefone">
              <a href="tel:+74952212238"> + 7 (495) 221-223-8</a>
              </div>
            </div>
             <div class="form-group">     
            <select class="form-control">
             <option value="" disabled selected hidden>Выберете отель</option>
  <option>1</option>
  <option>22</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>


       <span>Ближайший отель:  <a href="#" >Проспект Мира</a></span>
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
  </div>
</div>
        
       



           

        </div>  </div>  
         <!-- end form -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
 

         

<div class="container no-margin max_w">
  <div class="row">
    <!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider1.png" alt="Chania" class="" >
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/slider1.png" alt="Chania"  class="">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>



  <!-- Left and right controls -->
  <a  class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a  class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     <!-- end Carusele -->
  </div>
</div>
<!-- end wrap carusele -->



















          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <script src="js\jsfromajax\js.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="bootstrap/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="bootstrap/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>


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
  

</body></html>