<?php

/**
 * This is the model class for table "resguardo".
 *
 * The followings are the available columns in table 'resguardo':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property integer $numero_resguardo
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Consumible[] $consumibles
 * @property Estatus $estatus0
 */
class Resguardo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resguardo';
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
				'nombre, apellido_paterno, grado, numero_resguardo, estatus', 
				'required'
				),
			array(
				'nombre',
				'match',
				'pattern'=>'/^[a-záéíóúñ\s]+$/i',
				'message'=>'Caracteres inválidos',
				),
			array(
				'apellido_paterno',
				'match',
				'pattern'=>'/^[a-záéíóúñ\s]+$/i',
				'message'=>'Caracteres inválidos',
				),
			array(
				'apellido_materno',
				'match',
				'pattern'=>'/^[a-záéíóúñ\s]+$/i',
				'message'=>'Caracteres inválidos',
				),
			array(
				'numero_resguardo, estatus', 
			'numerical', 
			'integerOnly'=>true
			),
			array(
				'nombre, apellido_paterno, apellido_materno', 
			'length', 
			'max'=>45
			),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array(
				'id, grado, nombre, apellido_paterno, apellido_materno, numero_resguardo, estatus', 
			'safe', 
			'on'=>'search'
			),
		);
	}

	public function getNombreCompleto()
    {
        return $this->grado0->acronimo.' '.$this->nombre.' '.$this->apellido_paterno.' '.$this->apellido_materno;
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'consumibles' => array(self::HAS_MANY, 'Consumible', 'resguardo'),
			'estatus0' => array(self::BELONGS_TO, 'Estatus', 'estatus'),
			'grado0'=>array(self::BELONGS_TO, 'Grado', 'grado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'grado' => 'Grado',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'numero_resguardo' => 'Numero Resguardo',
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
		$criteria->compare('grado',$this->grado, true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('numero_resguardo',$this->numero_resguardo);
		$criteria->compare('estatus',$this->estatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
            'pageSize' => 100,
        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resguardo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
