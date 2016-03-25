<?php

class UsuariosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column-ingresarindex';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			#'accessControl', // perform access control for CRUD operations
			#'postOnly + delete', // we only allow deletion via POST request
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
				'users'=>array('@'),*/
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				/*'actions'=>array('create','update'),
				'users'=>array('@'),*/
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				/*'actions'=>array('admin','delete','view', 'index'),
				'users'=>array('admin@upp.mx'),*/
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
			$model=new Usuarios;

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				if(isset($_POST['Usuarios']))
				{
					$model->attributes=$_POST['Usuarios'];
					if($model->save())
					{
						if($model->role == '1'){
							$role = "Administrador";
						}
						elseif($model->role == '2')
						{	
							$role = "Operador";
						}
						elseif($model->role == '3')
						{
							$role = "Invitado";
						}
						$suceso = "creó al usuario ".$model->correo_institucional. " y rol de ". $role;
						self::guardar($suceso);	
						$this->redirect(array('view','id'=>$model->id));
					}
				}

				$this->render('create',array(
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
			$this->layout='//layouts/column-ingresarindex';
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
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(Yii::app()->user->getState('correo'))
		{	
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$model=$this->loadModel($id);
				if(isset($_POST['Usuarios']))
				{
					$model->attributes=$_POST['Usuarios'];
					if($model->save())
					{
						$suceso = "modificó al usuario  ". $model->correo_institucional." y id =".$id;
						self::guardar($suceso);	
						$this->redirect(array('view','id'=>$model->id));
					}
				}

				$this->render('update',array(
					'model'=>$model,
				));
			}
		}
		else
		{
			$this->layout='//layouts/column-ingresarindex';
			$this->redirect(Yii::app()->homeUrl);
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
			$model= new Usuarios;
			$usr = $model->find('id='.$id);	

			$suceso = "eliminó al usuario con id ". $id.", nombre: ".$usr->nombre.", correo: ".$usr->correo_institucional;
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
			$suceso = "Genero PDF de la lista de usuario";
			self::guardar($suceso);	

			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/main-pdf";
				$dataProvider=new CActiveDataProvider('Usuarios');
				
				$mPDF1 = Yii::app()->ePdf->mpdf();
				$mPDF1->WriteHTML($this->render('pdf',array('dataProvider'=>$dataProvider),true));
				$mPDF1->Output();
			}
		}
	}
	/*public function actionIndex()
	{
		if(Yii::app()->user->getState('correo'))
		{
			$suceso = "consulta lista de usuario";
			self::guardar($suceso);	

			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$dataProvider=new CActiveDataProvider('Usuarios');
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));
				
			}
			else
			{
				$this->render('errorfatal');
			}
		}else
		{
			$this->layout='//layouts/column-ingresarindex';
			$this->redirect(Yii::app()->homeUrl);
		}
	}*/

	/**
	 * Manages all models.
	 */

	public function actionAdmin()
	{
		if(Yii::app()->user->getstate('role')==1)
		{
			$suceso = "consulta avanzada de la tabla usuarios";
			self::guardar($suceso);	
			$this->layout="//layouts/column-administrador";
			
			$model=new Usuarios('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Usuarios']))
				$model->attributes=$_GET['Usuarios'];


			$this->render('admin',array(
				'model'=>$model,
			));



		}
		else
		{
			$this->render('errorfatal');
		}
	}
	public function actionAdminpdf3()
	{
		if(Yii::app()->user->getState('correo'))
		{
			$urls = 'http://localhost/universidad/upp/usuarios/index.jsp';
			if(Yii::app()->user->getstate('role')==1)
			{
				$mPDF1 = Yii::app()->ePdf->mpdf();
				$mPDF1->WriteHTML(file_get_contents($urls));
				$mPDF1->Output();
			}
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuarios the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuarios::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La página que solicita no existe.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuarios $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionErrorfatal()
	{
		$this->render('errorfatal');
	}
	/*public function actionGetFile()
	{
       
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: image/jpeg; ");
        header("Content-Disposition: attachment; filename=archivo.txt");
        header("Content-Transfer-Encoding: binary");
        
        // agregar el contenido
        print_r($content);
	}*/
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
		$model=new Usuarios('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Usuarios']))
				$model->attributes=$_GET['Usuarios'];



		$mPDF1 = Yii::app()->ePdf->mpdf();
		$mPDF1->WriteHTML($this->render('adminpdf',array('model'=>$model),true));
		$mPDF1->Output();
	}
	public function actionGridView() {
    $model =new User('search');
    if(isset($_GET['Usuarios']))
        $model->attributes =$_GET['Usuarios'];
 
    $params =array(
        'model'=>$model,
    );
 
    if(!isset($_GET['ajax'])) $this->render('grid_view', $params);
    else  $this->renderPartial('grid_view', $params);
}

	
}
