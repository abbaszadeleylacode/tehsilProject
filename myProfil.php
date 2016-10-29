
 <?php 
include "config.php";
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="education/css/bootstrap.min.css" rel="stylesheet">
    <link href="education/css/bootstrap-theme.css" rel="stylesheet">
    <link href="education/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="education/css/font-awesome.min.css" rel="stylesheet" />    
    <link href="education/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="education/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="education/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="education/css/owl.carousel.css" type="text/css">
  <link href="education/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link rel="stylesheet" href="education/css/fullcalendar.css">
  <link href="education/css/widgets.css" rel="stylesheet">
    <link href="education/css/style.css" rel="stylesheet">
    <link href="education/css/style-responsive.css" rel="stylesheet" />
  <link href="education/css/xcharts.min.css" rel=" stylesheet"> 
  <link href="education/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class=""> 
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Açılan menyu" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->

            <a href="index.php" class="logo"><img src="education/img/logo.png" style="width: 60px; height: 40px;">Comp<span class="lite">İnter</span></a>
            <!--logo end-->
            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Axtarış" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <?php 
              if ($_SESSION['type']=='sagird') {
             ?>
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="education/img/avatar1.jpg"  style="width: 20px; height: 20px;">
                            </span>
                            <span class="username">Tələbə</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="myProfil.php"><i class="icon_profile"></i>Mənim profilim</a>
                            </li>
                            <li>
                                <a href="inbox.php"><i class="icon_mail_alt"></i>Gələn qutusu</a>
                            </li>

                            <li>
                                <a href="parametr.php"><i class="icon_key_alt"></i>Parametrlər </a>
                            </li>

                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i>Çıxış</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
                        <?php 
                            }else if ($_SESSION['type']=='muellim')
                            {
             ?>
                        <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="education/img/user.jpg"  style="width: 20px; height: 20px;">
                            </span>
                            <span class="username">muellim</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="myProfil.php"><i class="icon_profile"></i>Mənim profilim</a>
                            </li>
                            <li>
                                <a href="inbox.php"><i class="icon_mail_alt"></i>Gələn qutusu</a>
                            </li>

                            <li>
                                <a href="parametr.php"><i class="icon_key_alt"></i>Parametrlər </a>
                            </li>

                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i>Çıxış</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>

<?php }else{ ?>

                        <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="education/img/user.jpg"  style="width: 20px; height: 20px;">
                            </span>
                            <span class="username">Administrator</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="myProfil.php"><i class="icon_profile"></i>Mənim profilim</a>
                            </li>
                            <li>
                                <a href="inbox.php"><i class="icon_mail_alt"></i>Gələn qutusu</a>
                            </li>

                            <li>
                                <a href="parametr.php"><i class="icon_key_alt"></i>Parametrlər </a>
                            </li>

                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i>Çıxış</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
<?php } ?>

      </header>      
      <!--header end-->

      <!--sidebar start-->

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Ana səhifə</span>
                      </a>
                  </li>
                              <?php 
              if ($_SESSION['type']=='muellim') {
             ?>
          <li class="sub-menu">
                      <a href="dersCedveli.php " class="">
                          <i class="icon_document_alt"></i>
                          <span>Dərs cədvəli</span>
                      </a>

                  </li>       
                  <li class="sub-menu">
                      <a href="qiymetCedveli.php" class="">
                          <i class="icon_desktop"></i>
                          <span>Qiymət cədvəli</span>
                      </a>

                  </li>

                  <li>
                      <a class="" href="davamiyyet.php">
                          <i class="icon_genius"></i>
                          <span>Davamiyyət</span>
                      </a>
                  </li>
                                      <li>                     
                      <a class="" href="imtahan.php">
                          <i class="icon_piechart"></i>
                          <span>İmtahan</span>
                          
                      </a>
                                         
                  </li>
             <?php }else if($_SESSION['type']=='sagird'){ ?>
             <li class="sub-menu">
                      <a href="dersCedveli.php " class="">
                          <i class="icon_document_alt"></i>
                          <span>Dərs cədvəli</span>
                      </a>

                  </li>       
                  <li class="sub-menu">
                      <a href="qiymetCedveli.php" class="">
                          <i class="icon_desktop"></i>
                          <span>Qiymət cədvəli</span>
                      </a>

                  </li>

                 <li>
                      <a class="" href="davamiyyet.php">
                          <i class="icon_genius"></i>
                          <span>Davamiyyət</span>
                      </a>
                  </li>
                      <li>
                          <a class="" href="tedbir.php">
                              <i class="icon_genius"></i>
                              <span>Tədbir</span>
                          </a>
                      </li>
                                        <li>                     
                      <a class="" href="imtahan.php">
                          <i class="icon_piechart"></i>
                          <span>İmtahan</span>
                          
                      </a>
                                         
                  </li>
                <?php }else{ ?>
                                  <li>                     
                      <a class="" href="qeydiyyatShow.php">
                          <i class="icon_piechart"></i>
                         <span>Şagird siyahısı</span>                      
                      </a>                 
                  </li>
                
                 <li class="sub-menu">
                      <a href="dersCedveli.php " class="">
                          <i class="icon_document_alt"></i>
                          <span>Dərs cədvəli</span>
  
                      </a>

                  </li>

                   <li>
                          <a class="" href="tedbir.php">
                              <i class="icon_genius"></i>
                              <span>Tədbir</span>
                          </a>
                      </li>
                  <li>                     
                      <a class="" href="imtahan.php">
                          <i class="icon_piechart"></i>
                          <span>İmtahan</span>
                          
                      </a>
                                         
                  </li>

                  <?php } ?>
                             
                 
                  
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <?php 
          if ($_SESSION['type']=='sagird') {
       ?>
      <!--main content start-->
      <section id="main-content">
      <br>
      <br>
      <br>
        <br>
           <div class="text-center"> <h1>telebenin profili</h1></div>
      </section>

      <?php }else if ($_SESSION['type']=='muellim'){ ?>
                  <section id="main-content">
      <br>
      <br>
      <br>
        <br>
           <div class="text-center"> <h1> muellimin profili</h1></div>
      </section>
      <?php }else{ ?>

      <section id="main-content">
      <br>
      <br>
      <br>
        <br>
           <div class="text-center"> <h1> Administrator profili</h1></div>
      </section>
      <?php } ?>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="education/js/jquery.js"></script>
  <script src="education/js/jquery-ui-1.10.4.min.js"></script>
    <script src="education/js/jquery-1.8.3.min.js"></script>
    <script type="education/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="education/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="education/js/jquery.scrollTo.min.js"></script>
    <script src="education/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="education/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="education/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="education/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="education/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="education/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="education/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="education/js/calendar-custom.js"></script>
  <script src="education/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="education/js/jquery.customSelect.min.js" ></script>
  <script src="education/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="education/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="education/js/sparkline-chart.js"></script>
    <script src="education/js/easy-pie-chart.js"></script>
  <script src="education/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="education/js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="education/js/xcharts.min.js"></script>
  <script src="education/js/jquery.autosize.min.js"></script>
  <script src="education/js/jquery.placeholder.min.js"></script>
  <script src="education/js/gdp-data.js"></script>  
  <script src="education/js/morris.min.js"></script>
  <script src="education/js/sparklines.js"></script>  
  <script src="education/js/charts.js"></script>
  <script src="education/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });
  </script>

  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Əsas səhifə</title>
    <link href="education/css/bootstrap.min.css" rel="stylesheet">
    <link href="education/css/bootstrap-theme.css" rel="stylesheet">
    <link href="education/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="education/css/font-awesome.css" rel="stylesheet" />
    <link href="education/css/style.css" rel="stylesheet">
    <link href="education/css/style-responsive.css" rel="stylesheet" />
  </head>

  <body  class="login-img3-body">

  <section id="container" > 
      <header class="header dark-bg">
          

            <a href="#" class="logo"><img src="education/img/logo.png" style="width: 60px; height: 40px;">Comp<span class="lite">İnter</span></a>
      

      </header>
     
      <section id="main-content">
          <div class="container">

            <form class="login-form" method="post" action="">        
              <div class="login-wrap">
                  <p class="login-img"><i class="icon_lock_alt"></i></p>
                  <button class="btn btn-primary btn-lg btn-block" type="submit"  name="register">Registrasiya</button>
                  <button class="btn btn-info btn-lg btn-block" type="submit" name="giris">Giriş</button>
              </div>
        </form>

    </div>

      </section>
  </section>

<?php
if (isset($_POST['register'])) {
header('location:register.php');
}



if (isset($_POST['giris'])) {
  header('location:login.php');
}
?>

  </body>
</html>
 -->