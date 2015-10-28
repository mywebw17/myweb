<?php
/* @var $this ArchivesController */
/* @var $model Archives */

$this->breadcrumbs=array(
	'Archives'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Archives', 'url'=>array('index')),
	array('label'=>'Create Archives', 'url'=>array('create')),
	array('label'=>'View Archives', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Archives', 'url'=>array('admin')),
);
?>

<h1>Update Archives <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>