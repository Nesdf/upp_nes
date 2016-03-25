<?php

class IngresarController extends Controller
{
	public $layout = '//layouts/column-ingresarindex';

	public function actionIndex()
	{
	
		if(Yii::app()->user->getState('role')==1)
		{
			$this->layout='//layouts/column-administrador';
			$this->render('index');
		}
		elseif(Yii::app()->user->getState('role')==2)
		{
			$this->layout='//layouts/column-operador';
			$this->render('index');
		}
		elseif(Yii::app()->user->getState('role')==3)
		{
			$this->layout='//layouts/column-visitante';
			$this->render('index');			
		}


		
	}
}