<?php
/* @var $this ProductController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	$model->id_producto,
);

$this->menu = array(
	array('label' => 'Editar producto', 'url' => array('update', 'id' => $model->id_producto)),
	array('label' => 'Borrar producto', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_producto), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>Detalle Producto:
	<?php echo $model->id_producto; ?>
</h1>

<?php $this->widget(
	'zii.widgets.CDetailView',
	array(
		'data' => $model,
		'attributes' => array(
			'id_producto',
			'codigo',
			'sku',
			'nombre',
			'id_marca',
			'descripcion',
			'stock',
		),
	)
); ?>