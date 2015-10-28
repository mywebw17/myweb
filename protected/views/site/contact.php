<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<h1 class="wsd-postheader">Contact Me</h1>

<div class="wsd-postcontent wsd-postcontent-0 clearfix"><div class="wsd-content-layout layout-item-0">
    <div class="wsd-content-layout-row responsive-layout-row-2">
    <div class="wsd-layout-cell layout-item-1" style="width: 50%">
        


<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?><br />
		<div>
		<?php $this->widget('CCaptcha'); ?><br />
		<?php echo $form->textField($model,'verifyCode'); ?><br />
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row">
		<?php echo CHtml::submitButton('Submit',array('class'=>'wsd-button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<?php endif; ?>

</div>
    <div class="wsd-layout-cell layout-item-1" style="width: 50%">
        
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Modoinding, Minahasa Selatan - Sulut - Indonesia</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            admin@wisard17.com
                                        </h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">+62 969 8097 614</h4>
                                    </div>
                                </div>
                            
        
        
        
    </div>
    </div>
</div>
</div>

<style>
.mediaa{
    -webkit-font-smoothing: antialiased;
box-sizing: border-box;
color: rgb(102, 102, 102);
display: block;
font-family: Lato, Arial;
font-size: 14px;
height: 52px;
line-height: 20px;
margin-bottom: 10px;
margin-top: 0px;
overflow-x: hidden;
overflow-y: hidden;
width: 360px;
zoom: 1;
}
.pull-left{
    font-size: 14px;
height: 52px;
line-height: 20px;
margin-right: 10px;
text-decoration: none;
width: 53.203125px;
zoom: 1;

}


</style>