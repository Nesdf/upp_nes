<?php

class ResguardoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				/*'actions'=>array('index','view'),
				'users'=>array('*'),*/
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				/*'actions'=>array('create','update'),
				'users'=>array('@'),*/
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				/*'actions'=>array('admin','delete'),
				'users'=>array('admin'),*/
			),
			array('deny',  // deny all users
				/*'users'=>array('*'),*/
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(Yii::app()->user->getState('role')==1)
		{
			$this->layout="//layouts/column-administrador";
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}
		elseif(Yii::app()->user->getState('role')==2)
		{
			$this->layout="//layouts/column-operador";
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}
		else
		{
			$this->render('errorfatal');
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if(Yii::app()->user->getState('correo'))
		{
			if(Yii::app()->user->getState('role')==1)
			{
				$model_grado = new Grado;
				$this->layout="//layouts/column-administrador";
				$model=new Resguardo;

								
				Global $text;
				$num_resguardo = $model->findAll("estatus=2");
				if($num_resguardo == null)
				{
					$criteria=new CDbCriteria;
					$criteria->select='max(numero_resguardo) AS numero_resguardo';							
					$row = $model->find($criteria);
					$text = $row['numero_resguardo'] + 1;							
				}
				else
				{
					foreach ($num_resguardo as $key) {						
						if($model->find("numero_resguardo=".$key->numero_resguardo." AND estatus=1"))
						{
							$criteria=new CDbCriteria;
							$criteria->select='max(numero_resguardo) AS numero_resguardo';							
							$row = $model->find($criteria);
							$text = $row['numero_resguardo'] + 1;
							
						}
						else
						{
							$text = $key->numero_resguardo;
							break;
						}
					}

				}
				if(isset($_POST['Resguardo']))
				{
					$model->attributes=$_POST['Resguardo'];
					if($model->save())
					{
						$suceso = "creó el resguardo ".$model->numero_resguardo." a nombre de ". $model->nombre;
						self::guardar($suceso);	
						$this->redirect(array('view','id'=>$model->id));
					}
				}
				if(isset($_POST['Grado']))
				{
					$model_grado->attributes = $_POST['Grado'];
					if($model_grado->save())
					{
							$this->render('create',array(
						'model'=>$model, 
						'n_resguardo'=>$text,
						'model_grado'=>$model_grado,
				));

					}
				}

				$this->render('create',array(
					'model'=>$model, 
					'n_resguardo'=>$text,
					'model_grado'=>$model_grado,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$model_grado = new Grado;
				$this->layout="//layouts/column-operador";
				$model=new Resguardo;

								
				Global $text;
				$num_resguardo = $model->findAll("estatus=2");
				if($num_resguardo == null)
				{
					$criteria=new CDbCriteria;
					$criteria->select='max(numero_resguardo) AS numero_resguardo';							
					$row = $model->find($criteria);
					$text = $row['numero_resguardo'] + 1;							
				}
				else
				{
					foreach ($num_resguardo as $key) {						
						if($model->find("numero_resguardo=".$key->numero_resguardo." AND estatus=1"))
						{
							$criteria=new CDbCriteria;
							$criteria->select='max(numero_resguardo) AS numero_resguardo';							
							$row = $model->find($criteria);
							$text = $row['numero_resguardo'] + 1;
							
						}
						else
						{
							$text = $key->numero_resguardo;
							break;
						}
					}

				}
				if(isset($_POST['Resguardo']))
				{
					$model->attributes=$_POST['Resguardo'];
					if($model->save())
					{
						$suceso = "creó el resguardo ".$model->numero_resguardo." a nombre de ". $model->nombre;
						self::guardar($suceso);	
						$this->redirect(array('view','id'=>$model->id));
					}
				}
				if(isset($_POST['Grado']))
				{
					$model_grado->attributes = $_POST['Grado'];
					if($model_grado->save())
					{
							$this->render('create',array(
						'model'=>$model, 
						'n_resguardo'=>$text,
						'model_grado'=>$model_grado,
				));

					}
				}

				$this->render('create',array(
					'model'=>$model, 
					'n_resguardo'=>$text,
					'model_grado'=>$model_grado,
				));
			}
			else
			{
				$this->render('errorfatal');
			}
		}
		else
		{
			$this->redirect(Yii::app()->homeUrl);
		}

	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		if(Yii::app()->user->getState('role')==1)
		{
			$this->layout="//layouts/column-administrador";

			$model=$this->loadModel($id);

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Resguardo']))
			{
				$model->attributes=$_POST['Resguardo'];
				if($model->save())
				{
					$suceso = "modificó el resguardo ".$model->numero_resguardo." a nombre de ". $model->nombre;
						self::guardar($suceso);
					$this->redirect(array('view','id'=>$model->id));
				}
			}

			$this->render('update',array(
				'model'=>$model,
			));
		}
		else
		{
			$this->render('errorfatal');
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		

		if(Yii::app()->user->getState('role')==1)
		{
			$model= new Resguardo;
			$resg = $model->find('id='.$id);
			$suceso = "eliminó al usuario con id ". $id.", nombre: ".$resg->nombre.", resguardo: ".$resg->numero_resguardo;
			self::guardar($suceso);

			$this->layout="//layouts/column-administrador";
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		{
			$this->render('errorfatal');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionPdf()
	{
		if(Yii::app()->user->getState('correo'))
		{
			$suceso = "Genero PDF de lista de resguardos ";
			self::guardar($suceso);

			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/main-pdf";
				$dataProvider=new CActiveDataProvider('Resguardo');
				
				$mPDF1 = Yii::app()->ePdf->mpdf();
				$mPDF1->WriteHTML($this->render('pdf',array('dataProvider'=>$dataProvider),true));
				$mPDF1->Output();
			}
		}
	}
	public function actionIndex()
	{
		if(Yii::app()->user->getState('correo'))
		{
			$suceso = "consultó  lista de resguardos ";
			self::guardar($suceso);
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$dataProvider=new CActiveDataProvider('Resguardo');
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				$dataProvider=new CActiveDataProvider('Resguardo');
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));
			}
			else
			{
				$this->render('errorfatal');
			}
		}
		else
		{
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->getState('correo'))
		{
			$suceso = "consulta avanzada de la tabla resguardos ";
			self::guardar($suceso);
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$model=new Resguardo('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Resguardo']))
					$model->attributes=$_GET['Resguardo'];

				$this->render('admin',array(
					'model'=>$model,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				$model=new Resguardo('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Resguardo']))
					$model->attributes=$_GET['Resguardo'];

				$this->render('admin',array(
					'model'=>$model,
				));
			}
			else
			{
				$this->render('errorfatal');
			}
		}
		else
		{
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Resguardo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Resguardo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Resguardo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='resguardo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionErrorfatal()
	{
		$this->render('errorfatal');
	}
	public static function guardar($suceso) {
		date_default_timezone_set("America/Mexico_City");
			
			$historial = new Historial();
			$historial->usuario = Yii::app()->user->getState('correo');
			$historial->fecha = date("Y.m.d");
			$historial->hora = date("H:i:s");
			if(Yii::app()->user->getState('role')==1)
				$historial->accion = 'Administrador '.$historial->usuario.' '.$suceso;
			elseif(Yii::app()->user->getState('role')==2)
				$historial->accion = 'Operador '.$historial->usuario.' '.$suceso;		
			elseif(Yii::app()->user->getState('role')==3)
				$historial->accion = 'Invitado '.$historial->usuario.' '.$suceso;


			$historial->id_usuario = Yii::app()->user->getState('id_usr');
			$historial->save(); 
	}
	public function actionAdminpdf() {
		$this->layout="//layouts/main-pdf";
		$model=new Resguardo('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Resguardo']))
				$model->attributes=$_GET['Resguardo'];

		$mPDF1 = Yii::app()->ePdf->mpdf();
		$mPDF1->WriteHTML($this->render('adminpdf',array('model'=>$model),true));
		$mPDF1->Output();
	}
	

}
