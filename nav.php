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
<script src="https://use.fontawesome.com/97240404e3.js"></script>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/yamm.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">

    <link href="assets/css/bootstrap-tokenfield.css" rel="stylesheet">
        <link href="assets/css/bootstrap-tokenfield.css" rel="stylesheet">
         <link href="assets/css/tokenfield-typeahead.css" rel="stylesheet">
        
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
