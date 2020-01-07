<?php
/* @var $this TblPopupsController */
/* @var $model TblPopups */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPopups', 'url'=>array('index')),
	array('label'=>'Manage TblPopups', 'url'=>array('admin')),
);
?>

<h1>Create TblPopups</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>