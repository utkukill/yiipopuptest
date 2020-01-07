<?php
/* @var $this TblPopupsController */
/* @var $model TblPopups */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblPopups', 'url'=>array('index')),
	array('label'=>'Create TblPopups', 'url'=>array('create')),
	array('label'=>'Update TblPopups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblPopups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPopups', 'url'=>array('admin')),
);
?>

<h1>View TblPopups #<?php echo $model->id; ?></h1>

<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'vews',
		'state'
	),
)); ?>

<br />
<b>JS Code:</b> <br />
<output>
&lt;script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME'];?>/popuptest/index.php?r=tblPopups/js&popup_id=<?php echo $model->id; ?>"&gt;&lt;/script&gt;

</output>
