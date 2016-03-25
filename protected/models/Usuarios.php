<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $cargo
 * @property string $correo_institucional
 * @property string $password
 * @property integer $role
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Role $role0
 * @property Estatus $estatus0
 */
class Usuarios extends CActiveRecord
{
	public static $role = array('1'=>'administrador', '2'=>'operador', '3'=>'visitante');

	/**
	 * @return string the associated database table name
	 */
	public $repetir_password;

	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(
				'nombre, apellido_paterno, cargo, correo_institucional, password, role, estatus', 
				'required'
				),
			array(
				'nombre',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Carcateres inválidos',
				),
			array(
				'apellido_paterno',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Carcateres inválidos',
				),
			array(
				'cargo',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Carcateres inválidos',
				),
			array(
				'password',
				'match',
				'pattern'=>'/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i',
				'message'=>'La contraseña debe ser alfanumérica',
				),
			array(
				'password',
				'required',
				),
			array(
				'password',
				'length',
				'min'=>8,
				'tooShort'=>'Mínnimo 8 caractéres',
				'max'=>40,
				'tooLong'=>'Máximo 40 Caractéres',
				),
			array(
				'repetir_password',
				'compare',
				'compareAttribute'=>'password',
				'message'=>'Las contraseñas no coinciden',
				),
			array(
				'repetir_password',
				'required',
				),
			array(
				'role, estatus', 'numerical', 
				'integerOnly'=>true
				),
			array(
				'nombre, apellido_paterno, apellido_materno, cargo, correo_institucional, password', 
				'length', 
				'max'=>45
				),
			array(
				'correo_institucional', 
				'unique', 
				'attributeName'=>'correo_institucional', 
				'className'=>'usuarios', 
				'allowEmpty'=>false,
				'message'=>Yii::t('app','Ya existe este Email"')
				),
			array(
				'correo_institucional',
				'length',
				'min'=>8,
				'tooShort'=>'Mínnimo 8 caractéres',
				'max'=>40,
				'tooLong'=>'Máximo 40 Caractéres'
				),
			array('correo_institucional',
				'email',
				),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido_paterno, apellido_materno, cargo, correo_institucional, password, role, estatus', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'role0' => array(self::BELONGS_TO, 'Role', 'role'),
			'estatus0' => array(self::BELONGS_TO, 'Estatus', 'estatus'),
		);
	}

	public static function getRole($key=null)
	{
		if($key!==null)
			return self::$role[$key];
		
		return self::$role;
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'cargo' => 'Cargo',
			'correo_institucional' => 'Correo Institucional',
			'password' => 'Password',
			'role' => 'Role',
			'estatus' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('correo_institucional',$this->correo_institucional,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role', $this->role, true);
		$criteria->compare('estatus', $this->estatus, true);
		/*$criteria->with=array('role0');
		$criteria->addSearchCondition('role0.role', $this->role, true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
            'defaultOrder'=>'nombre ASC',
            ),
			'pagination' => array(
            'pageSize' => 100,
        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave() {
       $this->password = sha1($this->password);
       return parent::beforeSave();
	}

	/*protected function afterValidate() {
       if($this->isNewRecord)
       {
       		if(count($this->getErrors())>0)
       		{
       			$this->password="";
       		}
       }
	}*/

}
