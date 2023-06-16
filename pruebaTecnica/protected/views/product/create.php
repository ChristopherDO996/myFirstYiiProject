<?php
/* @var $this ProductController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Creando producto nuevo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>