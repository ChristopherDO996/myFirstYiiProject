<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Bienvenidxs a mi proyecto <i>
		<?php echo CHtml::encode(Yii::app()->name); ?>
	</i></h1>
<hr>
<p>Esta es una breve <strong>review</strong> del sistema.</p>
<p>Admin Productos es mi prueba técnica y primer proyecto CRUD desarrollado en YII 1.1
	<br>
	Este proyecto consiste en un CRUD de usuarios y productos con origen en una base de datos de prueba con
	funcionalidades de creación, lectura, actualización y borrado de productos, así como de usuarios.
</p>
<p>Este sistema cuenta con tres módulos:</p>
<ul>
	<li>
		<strong>Productos:</strong> Aquí tenemos un CRUD que interactúa con una tabla de diversos productos, a este
		módulo no es posible acceder si no nos hemos logueado previamente. El intentar dar click, nos llevará al módulo
		de Login para que, una vez logueado, nos redirija a la página de Productos automáticamente.
	</li>
	<li>
		<strong>Usuarios:</strong> Este es otro CRUD que extrae datos de la tabla de usuarios e interactúa con ella. A
		diferencia del módulo anterior, este CRUD tiene como objetivo interactuar con cualquier usuario que no tenga un
		login previo, pero limitando los métodos de actualización y borrado de usuarios.
	</li>
	<li><strong>Login:</strong> Este apartado es exclusivamente para iniciar sesión y una vez iniciada, se convierte en
		un desloguer.
	</li>
</ul>

<h3>Notas adicionales</h3>
<p>
	Los siguientes archivos fueron adaptados a mi versión de PHP 8, sustituyendo los arreglos anteriores "{0}" a "[0]",
	por lo que, si se cuenta con una versión menor a php 7, posiblemente el sistema presente algunas inconsistencias en
	estos archivos, los cuales se solucionan cambiando los errores al formato de origen.
</p>
<ul>
	<li>utils/CFormatter.php</li>
	<li>web/helpers/CJson.php</li>
</ul>

<p class="text-center">
	Sin más por el momento, bienvenidx.
</p>