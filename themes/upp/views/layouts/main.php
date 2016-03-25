<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.css">
    <title>SIRB</title>
	</head>
	<body>		
		<seccion>
			<h2 class="tamanio-h1"><?php echo CHtml::encode(Yii::app()->name);?></h2>
			<h1 class="tamanio-h1">SIRB</h1>

			<div class="contenido">
				<?php echo $content; ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-md-4 col-sm-offset-4 col-lg-4  col-lg-offset-4">
						<br>
						<img class="centrado img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/upp.jpg" >
					</div>
				</div>
			</div>
		</seccion>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.js"></script>
	</body>
	<footer>
		<br><br>	    
	    Copyright &copy; <?php echo date('Y'); ?> por <a href="http://www.alohame.com.mx">www.alohame.com.mx</a><br/>
	    Realizado por Néstor Emilio Pérez Sánchez.<br/>
	    <?php echo Yii::powered(); ?>		
  </footer>
</html>