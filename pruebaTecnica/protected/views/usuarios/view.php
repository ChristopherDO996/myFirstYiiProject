<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
$this->breadcrumbs = array(
	'Usuarios' => array('index'),
	$model->id,
);

$this->menu = array(
	array('label' => 'Modificar usuario', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Borrar usuario', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>Mostrando usuario con ID:
	<?php echo $model->id; ?>
</h1>
<?php $this->widget(
	'zii.widgets.CDetailView',
	array(
		'data' => $model,
		'attributes' => array(
			'id',
			'username',
			'password',
			'nombre_real',
			'email',
			'authKey',
		),
	)
); ?>