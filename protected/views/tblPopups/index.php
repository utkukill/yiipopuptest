<?php
/* @var $this TblPopupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Popups',
);

$this->menu=array(
	array('label'=>'Create TblPopups', 'url'=>array('create')),
	array('label'=>'Manage TblPopups', 'url'=>array('admin')),
);
?>

<h1>Tbl Popups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
