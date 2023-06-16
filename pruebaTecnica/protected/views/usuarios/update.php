<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs = array(
	'Usuarios' => array('index'),
	$model->id => array('view', 'id' => $model->id),
	'Editando',
);
?>

<h1>Editando usuario:
	<?php echo $model->id; ?>
</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>