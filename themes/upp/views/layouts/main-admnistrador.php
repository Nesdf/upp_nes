<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.css">
    <title>SIRB</title>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo Yii::app()->user->isGuest;?>">SIRB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Historial <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Detalle del Historial', 'url' => array('/historial/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Consulta del Historial', 'url' => array('/historial/index'),'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>
          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Usuarios del Sistema <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Alta de Usuario', 'url' => array('/usuarios/create'),'visible'=>!Yii::app()->user->isGuest),
            array('label' => 'Administrar Usuario', 'url' => array('/usuarios/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Lista Usuario', 'url' => array('/usuarios/index'), 'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>
          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Consumibles <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Alta de Consumibles', 'url' => array('/consumible/create'),'visible'=>!Yii::app()->user->isGuest),
            array('label' => 'Administrar Consumibles', 'url' => array('/consumible/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Lista Consumibles', 'url' => array('/consumible/index'), 'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>

          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Resguardo <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Alta de Resguardo', 'url' => array('/resguardo/create'),'visible'=>!Yii::app()->user->isGuest),
            array('label' => 'Administrar Resguardo', 'url' => array('/resguardo/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Lista Resguardo', 'url' => array('/resguardo/index'), 'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>
          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Ubicación <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Alta de Ubicación', 'url' => array('/ubicacion/create'),'visible'=>!Yii::app()->user->isGuest),
            array('label' => 'Administrar Ubicación', 'url' => array('/ubicacion/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Lista Ubicación', 'url' => array('/ubicacion/index'), 'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>

          <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-left'),
      'items'=>array(
            array('label' => 'Grado Profesional <b class="caret"></b>', 'url' => '#', 'submenuOptions' => array('class' => 'dropdown-menu'), 'items' => array(
            array('label' => 'Alta de Grado', 'url' => array('/grado/createsirb'),'visible'=>!Yii::app()->user->isGuest),
            array('label' => 'Administrar Grado', 'url' => array('/grado/admin'),'visible'=>!Yii::app()->user->isGuest),
            #array('label' => 'Lista Ubicación', 'url' => array('/ubicacion/index'), 'visible'=>!Yii::app()->user->isGuest),
          ),
            'itemOptions' => array('class' => 'dropdown'),
            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
             ),       
            ),
          )); 

          ?>

        <?php $this->widget('zii.widgets.CMenu',array(
          'encodeLabel' => false,
      'htmlOptions'=>array('class'=>'nav navbar-right'),
      'items'=>array(
        array('label'=>'Salir ('.Yii::app()->user->name.')',  'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    )); ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div ><!-- /.container-fluid -->
  </nav>
		<seccion>
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