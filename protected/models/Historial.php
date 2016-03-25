<?php

/**
 * This is the model class for table "historial".
 *
 * The followings are the available columns in table 'historial':
 * @property integer $id
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $accion
 * @property integer $id_usuario
 */
class Historial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, fecha, hora, accion', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('usuario, hora', 'length', 'max'=>45),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usuario, fecha, hora, accion, id_usuario', 'safe', 'on'=>'search'),
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
			'role0'=>array(self::BELONGS_TO, 'Role', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'accion' => 'Detalle de las actividades del usuario',
			'id_usuario' => 'Role Sistema',
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
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('accion',$this->accion,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
            'pageSize' => 1000,
        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
