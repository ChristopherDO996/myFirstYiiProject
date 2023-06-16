<?php
/* @var $this ProductController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	$model->id_producto => array('view', 'id' => $model->id_producto),
	'Editando'
);

?>

<h1>Actualizando producto con ID:
	<?php echo $model->id_producto; ?>
</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>