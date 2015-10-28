<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/style.responsive.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/themes/freeze1/css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/css/animsition.min.css">
   

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/script.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/script.responsive.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.animsition.min.js"></script>
    

    <style>
        .wsd-content .wsd-postcontent-0 .layout-item-0 { background: ;  }
        .wsd-content .wsd-postcontent-0 .layout-item-1 { padding: 10px;  }
        .ie7 .wsd-post .wsd-layout-cell {border:none !important; padding:0 !important; }
        .ie6 .wsd-post .wsd-layout-cell {border:none !important; padding:0 !important; }    
    </style>
    <script>
    $(document).ready(function($) {
      
      $(".animsition").animsition({
      
        inClass               :   'fade-in-down-sm',
        outClass              :   'fade-out-down-sm',
        inDuration            :    1500,
        outDuration           :    800,
        //linkElement           :   '.animsition-link',
        linkElement           :   'a:not([target="_blank"]):not([href^=#])',
        loading               :    true,
        loadingParentElement  :   'body', //animsition wrapper element
        loadingClass          :   'animsition-loading',
        unSupportCss          : [ 'animation-duration',
                                  '-webkit-animation-duration',
                                  '-o-animation-duration'
                                ],
        //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        
        overlay               :   false,
        
        overlayClass          :   'animsition-overlay-slide',
        overlayParentElement  :   'body'
      });
      
    });
    
    </script>
</head>
<!-- Body -->
<body id="wsd-main">

<header class="wsd-header">
    <h1 class="wsd-headline">
        <a href="http://www.wisard17.com">Wisard17.com</a>
    </h1>
    <h2 class="wsd-slogan">People who never make mistakes are those who never try new things.</h2>
    <a href="http://www.wisard17.com" class="wsd-logo wsd-logo-1335403899">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mythm/images/logo-1335403899.png" alt="">
    </a>
    <div class="wsd-textblock wsd-object2139509221">
        <form class="wsd-search" name="Search" action="javascript:void(0)">
            <input type="text" value="">
            <input type="submit" value="" name="search" class="wsd-search-button">
        </form>
    </div>

<nav class="wsd-nav">
    <div class="wsd-nav-inner">
<ul class="wsd-hmenu">
        <li><a  <?php if(Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/' === Yii::app()->request->hostInfo.Yii::app()->request->url || 
                Yii::app()->request->baseUrl.'/page' === Yii::app()->request->url): ?> 
            class="active animsition-link"<?php endif ?> href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a class="animsition-link" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/archives">Archives</a></li>
        <li><a class="animsition-link" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/site/page?view=about">About</a></li>
        <li><a class="animsition-link" href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl; ?>/site/contact">Contacts</a></li>
    </ul> 
    </div>
</nav>
</header>

<div class="wsd-sheet clearfix">
    <div class="wsd-layout-wrapper">
        <div class="wsd-content-layout">
            <div class="animsition" data-animsition-in="zoom-in-sm"
                  data-animsition-in-duration="1000"
                  data-animsition-out="zoom-out-sm"
                  data-animsition-out-duration="800">    
<?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
<?php endif?>



<div class="wsd-sheet clearfix">
    <div class="wsd-layout-wrapper">
        <div class="wsd-content-layout">
            <div class="wsd-content-layout-row">
                <?php if(false){ ?>
                <div class="wsd-layout-cell wsd-sidebar1">
                <div class="wsd-block clearfix">
                    <?php 
                	
                	?>                
                </div>
                </div>
                <?php }?>
                <div class="wsd-layout-cell wsd-content">
                    
                    <?php echo $content; ?>
                </div>
                <?php if(!Yii::app()->user->isGuest){ ?>
                <div class="wsd-layout-cell wsd-sidebar2 ">
                <div >
    <?php
		
	?>              
                </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<footer class="wsd-footer">
<div class="wsd-footer-inner">
    <div class="wsd-content-layout">
        <div class="wsd-content-layout-row">
            <div class="wsd-layout-cell layout-item-0" style="width: 50%">
                <p>Copyright &copy; 2015 by&nbsp;<a href="http://www.wisard17.com">Wisard17.com</a><br />
                <?php echo Yii::powered(); ?></p>
            </div>
            <div class="wsd-layout-cell layout-item-0" style="width: 50%">
                <p style="text-align: center;">
                <a href="https://www.facebook.com/wisard17" target="_blank" class="wsd-facebook-tag-icon"></a>
                <a href="https://twitter.com/wisard17" target="_blank" class="wsd-twitter-tag-icon"></a>
                </p>
            </div>
        </div>
    </div>
</div>    
</footer>

</body>
</html>