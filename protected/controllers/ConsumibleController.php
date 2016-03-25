<?php

class ConsumibleController extends Controller
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
					'model'=>$this->loadModel($id), 'id'=>$id,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				$this->render('view',array(
					'model'=>$this->loadModel($id), 'id'=>$id,
				));
			}
			elseif(Yii::app()->user->getState('role')==3)
			{
				$this->layout="//layouts/column-visitante";
				$this->render('view',array(
					'model'=>$this->loadModel($id), 'id'=>$id,
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
			$this->layout="//layouts/column-administrador";
			$model=new Consumible;
			if(Yii::app()->user->getState('role')==1)
			{				
				#$path_picture = realpath('C:\xampp\htdocs\universidad\upp\images')."/";
				$path_picture = realpath(YiiBase::getPathOfAlias('webroot.themes.upp.imagen'))."/";

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Consumible']))
				{
					$model->attributes=$_POST['Consumible'];
					/*$rnd = rand(0,9999);*/  // generate random number between 0-9999
		            $uploadedFile=CUploadedFile::getInstance($model,'imagen_factura');
		            $fileName = $model->nombre_bien."_".$model->num_control_upp.".jpg";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
	             
	            if(!empty($uploadedFile))  // check if uploaded file is set or not
	            {
	                #$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/upp/imagen/'.$fileName);  // image will uplode to rootDirectory/banner/
	                $uploadedFile->saveAs($path_picture.$fileName);
	                $model->imagen_factura= $fileName;
	            }

	            
				if($model->save())
				{
					$suceso = "creó un consumible ".$model->nombre_bien." número de folio: ".$model->num_control_upp;
					self::guardar($suceso);	
					$this->redirect(array('view','id'=>$model->id));
				}
				}

				$this->render('create',array(
					'model'=>$model,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				
				$path_picture = realpath(YiiBase::getPathOfAlias('webroot.themes.upp.imagen'))."/";

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Consumible']))
				{
					$model->attributes=$_POST['Consumible'];
					/*$rnd = rand(0,9999);*/  // generate random number between 0-9999
		            $uploadedFile=CUploadedFile::getInstance($model,'imagen_factura');
		            $fileName = $model->nombre_bien."_".$model->num_control_upp.".jpg";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
	             
	            if(!empty($uploadedFile))  // check if uploaded file is set or not
	            {
	                #$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/upp/imagen/'.$fileName);  // image will uplode to rootDirectory/banner/
	                $uploadedFile->saveAs($path_picture.$fileName);
	                $model->imagen_factura= $fileName;
	            }

	            
				if($model->save())
				{
					$suceso = "creó un consumible ".$model->nombre_bien." número de folio: ".$model->num_control_upp;
					self::guardar($suceso);	
					$this->redirect(array('view','id'=>$model->id));
				}
				}

				$this->render('create',array(
					'model'=>$model,
				));
			}
			elseif(Yii::app()->user->getState('role')==3)
			{
				$this->layout="//layouts/column-visitante";
				
				$path_picture = realpath(YiiBase::getPathOfAlias('webroot.themes.upp.imagen'))."/";

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Consumible']))
				{
					$model->attributes=$_POST['Consumible'];
					/*$rnd = rand(0,9999);*/  // generate random number between 0-9999
		            $uploadedFile=CUploadedFile::getInstance($model,'imagen_factura');
		            $fileName = $model->nombre_bien."_".$model->num_control_upp.".jpg";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
	             
	            if(!empty($uploadedFile))  // check if uploaded file is set or not
	            {
	                #$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/upp/imagen/'.$fileName);  // image will uplode to rootDirectory/banner/
	                $uploadedFile->saveAs($path_picture.$fileName);
	                $model->imagen_factura= $fileName;
	            }

	            
				if($model->save())
				{
					$suceso = "creó un consumible ".$model->nombre_bien." número de folio: ".$model->num_control_upp;
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
		if(Yii::app()->user->getState('correo'))
		{
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$model=$this->loadModel($id);

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Consumible']))
				{
					$path_picture = realpath(YiiBase::getPathOfAlias('webroot.themes.upp.imagen'))."/";

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Consumible']))
				{
					$model->attributes=$_POST['Consumible'];
					/*$rnd = rand(0,9999);*/  // generate random number between 0-9999
		            $uploadedFile=CUploadedFile::getInstance($model,'imagen_factura');
		            $fileName = $model->nombre_bien."_".$model->num_control_upp.".jpg";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
	             
	            if(!empty($uploadedFile))  // check if uploaded file is set or not
	            {
	                #$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/upp/imagen/'.$fileName);  // image will uplode to rootDirectory/banner/
	                $uploadedFile->saveAs($path_picture.$fileName);
	                $model->imagen_factura= $fileName;
	            }

	            
				if($model->save())
				{
					$suceso = "creó un consumible ".$model->nombre_bien." número de folio: ".$model->num_control_upp;
					self::guardar($suceso);	
					$this->redirect(array('view','id'=>$model->id));
				}
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
		else
		{
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
			$model= new Consumible;
			$consm = $model->find('id='.$id);	
			$suceso = "eliminó el consumible  ".$consm->nombre_bien." número de folio: ".$consm->num_control_upp;
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
	public function actionIndex()
	{
		if(Yii::app()->user->getState('correo'))
		{

			$suceso = "consultó los consumibles  ";
			self::guardar($suceso);	
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$dataProvider=new CActiveDataProvider('Consumible');
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				$dataProvider=new CActiveDataProvider('Consumible');
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
			$suceso = "consulta avanzada de consumibles  ";
			self::guardar($suceso);	
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/column-administrador";
				$model=new Consumible('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Consumible']))
					$model->attributes=$_GET['Consumible'];

				$this->render('admin',array(
					'model'=>$model,
				));
			}
			elseif(Yii::app()->user->getState('role')==2)
			{
				$this->layout="//layouts/column-operador";
				$model=new Consumible('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Consumible']))
					$model->attributes=$_GET['Consumible'];

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
	public function actionPdf()
	{
		if(Yii::app()->user->getState('correo'))
		{
			
			if(Yii::app()->user->getState('role')==1)
			{

				$suceso = "Genero PDF de la lista de usuario";
			self::guardar($suceso);	
				$this->layout="//layouts/main-pdf";
				$dataProvider=new CActiveDataProvider('Consumible');
				
				$mPDF1 = Yii::app()->ePdf->mpdf();
				$mPDF1->WriteHTML($this->render('pdf',array('dataProvider'=>$dataProvider),true));
				$mPDF1->Output();
			}
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Consumible the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Consumible::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Consumible $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='consumible-form')
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

		if(Yii::app()->user->getState('correo'))
		{			
			if(Yii::app()->user->getState('role')==1)
			{
				$this->layout="//layouts/main-pdf";
				$suceso = "genero PDF de la lista de usuario";
				self::guardar($suceso);	
				$model=new Consumible('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Consumible']))
				$model->attributes=$_GET['Consumible'];
			}
		}



		$mPDF1 = Yii::app()->ePdf->mpdf();
		$mPDF1->WriteHTML($this->render('adminpdf',array('model'=>$model),true));
		$mPDF1->Output();
	}

	public function actionResguardo($id, $nombre) {
		date_default_timezone_set("America/Mexico_City");
		$fecha = date("d / m / Y");
		$this->layout="//layouts/main-pdf";
		$consumible = new Consumible;
		$model = $consumible->find('id='.$id);

		$mPDF1 = Yii::app()->ePdf->mpdf();
		$mPDF1->WriteHTML($this->render('consumible',array('model'=>$model, 'fecha'=>$fecha, 'nombre'=>$nombre, ),true));
		$mPDF1->Output();
			}
}
