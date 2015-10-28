<?php

/**
 * @author wisard17
 * @copyright 2015
 */



?>

<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    

    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/animate.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/slick.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/jquery.easy-pie-chart.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/freeze.css">
        


    <script type="text/javascript" src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mylogo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
            <!--  <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
                         <i class="fa fa-spinner fa-pulse fa-spin fa-3x"></i>
            -->  
 
            <i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
            </div>
        </div>
    </div>
   
    <header>        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mylogo.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="getApp" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>"><i class="fa fa-home"></i>  Home</a>
                            </li>
                            <li><a href="#about">about</a>
                            </li>
                            <li><a href="#features">Education</a>
                            </li>
                            <li><a href="#support">Hobby</a>
                            </li>
                            <li><a href="#skills">Ability</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_white_bold sft" 
                            data-x="center" 
                            data-y="center" 
                            data-hoffset="0" 
                            data-voffset="-40" 
                            data-speed="500" 
                            data-start="1200" 
                            data-easing="Power4.easeOut">
                            <div>Welcome to</div>
                        </div>
                        <div class="tp-caption large_white_light sfb" 
                            data-x="center" 
                            data-y="center" 
                            data-hoffset="0" 
                            data-voffset="40" 
                            data-speed="1000" 
                            data-start="1500" 
                            data-easing="Power4.easeOut">
                            Wisard17.com
                        </div>

                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl slideDown hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="-20"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Power4.easeOut">
                            <?php
echo CHtml::image(Yii::app()->request->baseUrl."/images/me.jpg","image",array("width"=>300));
?>
                        </div>

  
                        
                        <div class="tp-caption mediumlarge_light_white sfl hidden-xs" 
                            data-x="center" 
                            data-y="250" 
                            data-hoffset="0" 
                            data-voffset="0" 
                            data-speed="1000" 
                            data-start="1400" 
                            data-easing="Power4.easeOut">
                            Me Wisard Kalengkongan <i class="fa fa-cogs"></i>
                        </div>
                        
                        <div class="tp-caption large_white_light sfb visible-xs" 
                            data-x="center" 
                            data-y="center" 
                            data-hoffset="0" 
                            data-voffset="0" 
                            data-speed="1000" 
                            data-start="1400" 
                            data-easing="Power4.easeOut">
                            <p style="text-align: center;">Me<br /> Wisard Kalengkongan <i class="fa fa-cogs"></i></p>
                        </div>
                        
                        
                    </li>

                
                    
                </ul>
            </div>
        </div>


    </header>


    <div class="wrapper">

        

        <section id="about">
            <div class="container">
                
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>About Me</h1>
                    <div class="divider"></div>
                    <p>First of all I give thanks to the almighty GOD, 
                    because the blessing, guidance, inspiration, knowledge, 
                    and there  many that I can't say... because of that, 
                    so i can make this web, I know this is only a small thing of HIS gift, 
                    and I will continue to strive to provide the best ... Thank you Jesus...</p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="about-item scrollpoint sp-effect2">
                            <i class="fa fa-download fa-2x"></i>
                            <h3>Easy setup</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6" >
                        <div class="about-item scrollpoint sp-effect5">
                            <i class="fa fa-mobile fa-2x"></i>
                            <h3>On-the-go</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6" >
                        <div class="about-item scrollpoint sp-effect5">
                            <i class="fa fa-users fa-2x"></i>
                            <h3>Social connect</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6" >
                        <div class="about-item scrollpoint sp-effect1">
                            <i class="fa fa-sliders fa-2x"></i>
                            <h3>Dedicated support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Educational Background</h1>
                    <div class="divider"></div>
                    <p>Learn more about this feature packed App</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-cogs fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">User Settings</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-envelope fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Messages Inbox</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-users fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Friends List</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-comments fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Live Chat Messages</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-calendar fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Calendar / Planner</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        
                    </div>
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-map-marker fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">My Places</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-film fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Media Player™</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-compass fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Intuitive Statistics</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-picture-o fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Weather on-the-go</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media active feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-plus fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">And much more!</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
       
        <section id="support" class="doublediagonal">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>My Hobby</h1>
                    <div class="divider"></div>
                    <p>Otak atik kom</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="skills">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>my Ability</h1>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="85" data-percent="0" >
                            <span class="percent">85%</span>
                        </div>
                        <h4 class="skill-detail">html/css</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="80" data-percent="0">
                            <span class="percent">80%</span>
                        </div>
                        <h4 class="skill-detail">PHP</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="75" data-percent="0">
                            <span class="percent">75%</span>
                        </div>
                        <h4 class="skill-detail">sql</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="60" data-percent="0">
                            <span class="percent">60%</span>
                        </div>
                        <h4 class="skill-detail">javascript</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="95" data-percent="0">
                            <span class="percent">95%</span>
                        </div>
                        <h4 class="skill-detail">Pascal</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="54" data-percent="0">
                            <span class="percent">54%</span>
                        </div>
                        <h4 class="skill-detail">Java</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="55" data-percent="0">
                            <span class="percent">55%</span>
                        </div>
                        <h4 class="skill-detail">C++</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="45" data-percent="0">
                            <span class="percent">45%</span>
                        </div>
                        <h4 class="skill-detail">Graphic Design (Photoshop)</h4>
                    </div>
                    <div class="col-md-2 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" percent1="42" data-percent="0">
                            <span class="percent">42%</span>
                            
                        </div>
                        <h4 class="skill-detail">Wordpress</h4>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mylogo.png" alt="" class="logo">
                </a>
                
                
        <div class="row">
            <div class="col-md-6 col-sm-6 rights" style="margin-top: 40px;">
                <p>Copyright &copy; 2015 by&nbsp;<a href="http://www.wisard17.com">Wisard17.com</a><br />
                <?php echo Yii::powered(); ?></p>
            </div>
            <div class="col-md-6 col-sm-6">
            <div class="social">
                    <a href="https://www.twitter.com/wisard17" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="https://www.facebook.com/wisard17" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>

            </div>
        </div>
    
            </div>
        </footer>

    </div>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/slick.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/placeholdem.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/waypoints.min.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/scripts.js"></script>
    <script src="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/js/jquery.easypiechart.min.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
            appMaster.skillsChart();
        });
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#cobaacom" ).autocomplete({
      source: availableTags
    });
  });
  </script>
</body>

</html>
