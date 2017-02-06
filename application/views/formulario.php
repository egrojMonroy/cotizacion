
 
<?php 
 echo form_open_multipart('ccoti/recibirdatos');
date_default_timezone_set('America/Denver');

$date = date('Y/m/d');
echo 'Fecha: ';
echo $date;
?>
<?php


$fecha = array(
	'name' => 'fecha',
	
	);

$cliente = array(
	'name' => 'cliente',
	'placeholder' => 'escribe el nombre del :V',
	);









//:v



$trabajo = array(
	'name' => 'trabajo',
	'placeholder' => 'ingrese el trabajo',
	);





$tamano = array(
	'name' => 'tamano',
	'placeholder' => 'escriba el tamaño',
	);

$cantidad = array(
	'name' => 'cantidad',
	'placeholder' => 'escriba la cantidad',
	);

$material = array(
	'name' => 'material',
	'placeholder' => 'escriba el material',
	'style'         => 'width:50%',
	);

$color = array(
	'name' => 'color',
	'placeholder' => 'introduzca el color',
	
	);
$numdel = array(
	'name' => 'numdel',
	
	
	);

$numal = array(
	'name' => 'numal',
	
	
	);






//cotizacion:

$materialcoti = array(
	'name' => 'materialcoti',
	//'placeholder' => 'escriba el material',
	'style'         => 'width:25%',
	);
$materialcoti2 = array(
	'name' => 'materialcoti2',
	//'placeholder' => 'escriba el material',
	'style'         => 'width:25%',
	);
$materialcoti3 = array(
	'name' => 'materialcoti3',
	//'placeholder' => 'escriba el material',
	'style'         => 'width:25%',
	);

$materialcoti4 = array(
	'name' => 'materialcoti4',
	//'placeholder' => 'escriba el material',
	'style'         => 'width:25%',
	);


$separacion = array(
	'name' => 'separacion',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);


$placa = array(
	'name' => 'placa',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);


$tinta = array(
	'name' => 'tinta',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);

$armado = array(
	'name' => 'armado',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);

$impresion = array(
	'name' => 'impresion',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);



$numerado = array(
	'name' => 'impresion',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);




$troquelado = array(
	'name' => 'troquelado',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:25%',
	);


$total = array(
	'name' => 'total',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$desc = array(
	'name' => 'desc',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);



$costmat1 = array(
	'name' => 'costmat1',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);



$costmat2 = array(
	'name' => 'costmat2',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costmat3 = array(
	'name' => 'costmat3',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costmat4 = array(
	'name' => 'costmat3',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);


$costsepa = array(
	'name' => 'costsepa',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costplaca = array(
	'name' => 'costplaca',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costtinta = array(
	'name' => 'costtinta',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costarmado = array(
	'name' => 'costarmado',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costimpresion = array(
	'name' => 'costimpresion',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);


$costnumerado = array(
	'name' => 'costnumerado',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);

$costtroquelado = array(
	'name' => 'costtroquelado',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);


$totaltot = array(
	'name' => 'totaltot',
	//'placeholder' => 'escriba la separacion',
	'style'         => 'width:10%',
	);
?>
<?= form_hidden('fecha', $date);?>
<br><br>
	<?= form_label('Cliente:', 'cliente'); ?>
	<?= form_input($cliente);?>
	<font color="red"><?php echo form_error('cliente');?></font>

	


<br><br><br><br><br>

	<?= form_label('Trabajo:','trabajo'); ?>
	<?= form_input($trabajo); ?>
	<font color="red"><?= form_error('trabajo');?></font>


	<br><br>

	<?= form_label('Tamaño:','tamano'); ?>
	<?= form_input($tamano); ?>
	<font color="red"><?=form_error('tamano');?></font>

	<br><br>

	<?= form_label('Cantidad:','cantidad'); ?>
	<?= form_input($cantidad); ?>
	<font color="red"><?= form_error('cantidad');?></font>


	<br><br>

	<?= form_label('Material:','material'); ?>
	<?= form_input($material); ?>
	<font color="red"><?=form_error('material');?></font>

	<br><br>

	<?= form_label('Color:','color'); ?>
	
	<?= form_input($color); ?>
	<font color="red"><?=form_error('color');?></font>
	<br><br>

	<?= form_label('Numerado del:','numde'); ?>
	<?= form_input($numdel); ?>
	<?= form_label('   Al:','numal'); ?>
	<?= form_input($numal); ?>
	<font color="red"><?=form_error('numdel');?></font>
	<font color="red"><?=form_error('numal');?></font>
	








	<h1>Cotizacion</h1>




	<?= form_label('Material:','materialcoti'); ?>
	<tab2><?= form_input($materialcoti); ?></tab2>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costmat1'); ?>
	<?= form_input($costmat1); ?>
	<font color="red"><?=form_error('materialcoti');?></font>





<br>










	<?= form_label('          ','materialcoti2'); ?>
	<tab1><?= form_input($materialcoti2); ?></tab1>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costmat2'); ?>
	<?= form_input($costmat2); ?>
	<font color="red"><?=form_error('materialcoti');?></font>

<br>







	<?= form_label('          ','materialcoti3'); ?>
	<tab1><?= form_input($materialcoti3); ?></tab1>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costmat3'); ?>
	<?= form_input($costmat2); ?>
	<font color="red"><?=form_error('materialcoti');?></font>

<br>



	<?= form_label('          ','materialcoti4'); ?>
	<tab1><?= form_input($materialcoti3); ?></tab1>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costmat4'); ?>
	<?= form_input($costmat2); ?>
	<font color="red"><?=form_error('materialcoti');?></font>






<br>
	<?= form_label('Separacion:','separacion'); ?>
	<?= form_input($separacion); ?>
	<font color="red"><?=form_error('materialcoti');?></font>

	<?= form_label('          ','costsepa'); ?>
	<?= form_input($costsepa); ?>
	<font color="red"><?=form_error('materialcoti');?></font>



<br>
	<?= form_label('Placa:','placa'); ?>
	<tab3><?= form_input($placa); ?></tab3>
	<font color="red"><?=form_error('materialcoti');?></font>

	<?= form_label('          ','costplaca'); ?>
	<?= form_input($costsepa); ?>
	<font color="red"><?=form_error('materialcoti');?></font>



<br>
	<?= form_label('Tinta:','tinta'); ?>
	<tab4><?= form_input($tinta); ?></tab4>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costtinta'); ?>
	<?= form_input($costtinta); ?>
	<font color="red"><?=form_error('materialcoti');?></font>



<br>
	<?= form_label('Armado:','armado'); ?>
	<tab5><?= form_input($armado); ?></tab5>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costarmado'); ?>
	<?= form_input($costarmado); ?>
	<font color="red"><?=form_error('materialcoti');?></font>



<br>
	<?= form_label('Impresion:','impresion'); ?>
	<tab6><?= form_input($impresion); ?></tab6>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costimpresion'); ?>
	<?= form_input($costimpresion); ?>
	<font color="red"><?=form_error('materialcoti');?></font>


<br>
	<?= form_label('Numerado:','numerado'); ?>
	<tab7><?= form_input($numerado); ?></tab7>
	<font color="red"><?=form_error('materialcoti');?></font>




	<?= form_label('          ','costnumerado'); ?>
	<?= form_input($costnumerado); ?>
	<font color="red"><?=form_error('materialcoti');?></font>

<br>
	<?= form_label('Troquelado: ','troquelado'); ?>
	<?= form_input($troquelado); ?>
	<font color="red"><?=form_error('materialcoti');?></font>


	<?= form_label('          ','costtroquelado'); ?>
	<?= form_input($costtroquelado); ?>
	<font color="red"><?=form_error('materialcoti');?></font>

	<br>



<br>
	<?= form_label('Total: ','total'); ?>
	<tab9><?= form_input($total); ?> </tab9>
	<font color="red"><?=form_error('total');?></font>


	<br>
	<?= form_label('%: ','desc'); ?>
	<tab10><?= form_input($desc); ?> </tab10>
	<font color="red"><?=form_error('total');?></font>

	<br>
	<b><?= form_label('TOTAL: ','totaltot'); ?><b>
	<tab11><?= form_input($totaltot); ?> </tab11>
	<font color="red"><?=form_error('total');?></font>


<br><br>
<br><br><br>
<?= form_submit('','Enviar Cotizacion');?>

<?= form_close();








































 ?>





 
