<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/pdf.css">
    <title>SIRB</title>
	</head>
	<body>
		
		<seccion>
			<div class="contenido">
				<?php echo $content; ?>
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