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
        .pre-loader {
          position: fixed;
          width: 100%;
          height: 100%;
          z-index: 9999999;
          display: block;
          background: #2B302F;
        }
        .pre-loader .load-con {
            color: rgb(102, 102, 102);
          margin: 20% auto;
          position: relative;
          text-align: center;
        }    
    </style>
    <script>
    var appMaster = {

    preLoader: function(){
        imageSources = []
        $('img').each(function() {
            var sources = $(this).attr('src');
            imageSources.push(sources);
        });
        if($(imageSources).load()){
            $('.pre-loader').fadeOut('slow');
        }
    }};
    $(document).ready(function($) {
      appMaster.preLoader();
      $(".animsition").animsition({
      
        inClass               :   'fade-in-down-sm',
        outClass              :   'fade-out-down-sm',
        inDuration            :    1500,
        outDuration           :    800,
        linkElement           :   '.animsition-link',
        // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
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
            <div class="animsition" data-animsition-in="flip-in-y-fr"
                      data-animsition-in-duration="1000"
                      data-animsition-out="flip-out-y-fr"
                      data-animsition-out-duration="800">        
<?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
<?php endif?>

<?php echo $content; ?>
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

