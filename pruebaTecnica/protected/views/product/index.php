<?php

/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Productos',
);

$this->menu = array(
	array('label' => 'Crear Productos', 'url' => array('create')),
);

?>

<h1>Productos</h1>

<div class="form">
	<table>
		<tr>
			<th>Código</th>
			<th>Clave</th>
			<th>Título</th>
			<th>Marca</th>
			<th>Truper</th>
			<th></th>
		</tr>
		<?php foreach ($models as $model => $modelValue): ?>
			<?php if ($modelValue['marca']->id_marca == 1)
				$activeCheckBox = "checked";
			else
				$activeCheckBox = "" ?>
				<tr>
					<td>
					<?= $modelValue['codigo']; ?>
				</td>
				<td>
					<?= $modelValue['sku']; ?>
				</td>
				<td>
					<?= $modelValue['nombre']; ?>
				</td>
				<td>
					<?= $modelValue['marca']->marca; ?>
				</td>
				<td>
					<?php echo CHtml::activeCheckBox($modelValue, "[$model]nombre", ['checked' => $activeCheckBox, 'disabled' => 'disabled']); ?>
				</td>
				<td>
					<a href="<?php echo $this->createUrl('product/view', array('id' => $modelValue['id_producto'])) ?>">
						Detalles
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>

</div><!-- form -->
<?php $this->widget(
	'CLinkPager',
	array(
		'pages' => $pages,
	)
) ?>