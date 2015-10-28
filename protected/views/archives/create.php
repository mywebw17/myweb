<?php
/* @var $this ArchivesController */
/* @var $model Archives */

$this->breadcrumbs=array(
	'Archives'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Archives', 'url'=>array('index')),
	array('label'=>'Manage Archives', 'url'=>array('admin')),
);
?>

<h1>Create Archives</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>