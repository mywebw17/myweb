<?php
/* @var $this ArchivesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Archives',
);


?>
<h1 class="wsd-postheader" style="font-size: 35px; margin-bottom: 20px;">Archives</h1>
<div style="background: #F8F8F8;">


<div class="wsd-postcontent clearfix">
<?php
$dataProvider->sort->defaultOrder='create_time DESC';
$models1 =$dataProvider->getData();

foreach ($models1 as $data1):
    ?>
    
    
	<div >
		<h1 >
        <?php echo CHtml::link(CHtml::encode($data1->title), array('view', 'id'=>$data1->id)); ?>
        </h1>
		<h4 style="font-size: 10px;margin-top: -10px;margin-bottom: 7px;">posted<?php echo ' on ' . date('F j, Y',substr(CHtml::encode($data1->create_time),"0","10")); ?>
        </h4>
	</div>
	<div class="clearfix" style="border-bottom: 1px solid silver; padding: 5px; min-height: 75px;">
	<div class="wsd-lightbox-image" style="position: absolute;">
    <?php
          echo CHtml::image(Yii::app()->request->baseUrl.CHtml::encode($data1->urlgambar),"image",array("height"=>70,"width"=>70));
    ?>
    </div>
    <p class="wsd-content" style="margin-left: 80px;" >
        <?php
        $as = substr(CHtml::encode($data1->content),"300","310");
    	$jmlk = 300+strpos($as,' ');   	
    	$hasil= substr($data1->content,"0",$jmlk);
        echo $hasil."... ".CHtml::link("Read More", array('view', 'id'=>$data1->id)); 
        ?>
     </p>
	</div>



<?php
endforeach;
 
?>
</div>
</div>