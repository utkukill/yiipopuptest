<?php
/* @var $this TblPopupsController */
/* @var $model TblPopups */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPopups', 'url'=>array('index')),
	array('label'=>'Create TblPopups', 'url'=>array('create')),
	array('label'=>'View TblPopups', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblPopups', 'url'=>array('admin')),
);
?>

<h1>Update TblPopups <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>