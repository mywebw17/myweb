<?php
/* @var $this ArchivesController */
/* @var $model Archives */

$this->breadcrumbs=array(
	'Archives'=>array('index'),
	$model->title,
);

?>
<div style="background: #F8F8F8;">
<h1 class="art-postheader" style="margin: 5px;"><?php echo $model->title; ?></h1>


<div class="wsd-postcontent clearfix" style="margin: 20px;">
	
	<?php
          echo CHtml::image(CHtml::encode($model->urlgambar),"image",array("width"=>300));
    ?>

	<div class="content" style=" line-height: 20px; margin-top: 16px; word-wrap: break-word;">
        <p>
		<?php
			echo CHtml::decode($model->content);
		?>
        </p>
	</div>
    <div class="author">
    <h5>
		posted<?php echo ' on ' . date('F j, Y',substr(CHtml::encode($model->create_time),"0","10")); ?>
        </h5>
        
        
                
	</div>

	</div>
</div>