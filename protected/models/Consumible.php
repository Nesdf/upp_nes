<?php

/**
 * This is the model class for table "consumible".
 *
 * The followings are the available columns in table 'consumible':
 * @property integer $id
 * @property string $nombre_bien
 * @property string $descripcion
 * @property string $marca
 * @property string $modelo
 * @property string $numero_serie
 * @property string $costo
 * @property string $partida
 * @property integer $resguardo
 * @property string $fecha_factura
 * @property string $fecha_alta
 * @property integer $numero_factura
 * @property string $imagen_factura
 * @property string $fuente_financiamiento
 * @property string $proveedor
 * @property string $leyenda
 * @property integer $ubicacion
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Estatusconsumible $estatus0
 * @property Resguardo $resguardo0
 * @property Ubicacion $ubicacion0
 */
class Consumible extends CActiveRecord
{
	public $picture;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consumible';
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

				'nombre_bien, marca, modelo, numero_serie, costo, partida, descripcion, resguardo, fecha_factura, fecha_alta, numero_factura, num_control_upp, imagen_factura, fuente_financiamiento, proveedor, ubicacion, estatus', 
				'required'
				),
			array(
				'nombre_bien',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Caracteres inválidos',
				),
			array(
				'proveedor',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Proveedor contiene caracteres inválidos',
				),
			array(
				'proveedor',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Proveedor contiene caracteres inválidos',
				),
			array(
				'modelo',
				'match',
				'pattern'=>'/^[a-záéíóúñÁÉÍÓÚ"ñ","Ñ"\s]+$/i',
				'message'=>'Fuente de Financiemiento contiene caracteres inválidos',
				),
			array(
				'costo',
				'numerical',
				'integerOnly'=>false,
				),
			array(
				'resguardo, ubicacion, estatus', 
				'numerical', 
				'integerOnly'=>true,
				'message'=>'Resguardo debe ser un valor Entero',
				),
			array(
				'nombre_bien', 
				'length', 
				'max'=>85
				),
			array(
				'marca, modelo, numero_serie, costo, partida, fuente_financiamiento, proveedor', 
				'length', 
				'max'=>45
				),
			array(
				'descripcion, leyenda', 
				'safe'
				),
			array(
            	'imagen_factura', 
            	'unique',
            	'message'=>'El nombre de esta imagen ya existe',
            	),
			array(
            	'num_control_upp', 
            	'unique',
            	'message'=>'Ya fue asignado es folio',
            	),
          
            array('imagen_factura', 'file', 'types'=>'jpg', 'allowEmpty' => false, 'on' => 'insert'),
    		array('imagen_factura', 'file', 'types'=>'jpg', 'allowEmpty' => true, 'on' => 'update'),
      
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_bien, descripcion, marca, modelo, numero_serie, costo, partida, resguardo, fecha_factura, fecha_alta, numero_factura, imagen_factura, fuente_financiamiento, proveedor, leyenda, ubicacion, estatus', 
				'safe', 
			'on'=>'search'),
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
			'estatus0' => array(self::BELONGS_TO, 'Estatusconsumible', 'estatus'),
			'resguardo0' => array(self::BELONGS_TO, 'Resguardo', 'resguardo'),
			'ubicacion0' => array(self::BELONGS_TO, 'Ubicacion', 'ubicacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_bien' => 'Nombre Bien',
			'descripcion' => 'Descripcion',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'numero_serie' => 'Numero Serie',
			'num_control_upp' => 'Número de Control UPP',
			'costo' => 'Costo',
			'partida' => 'Partida',
			'resguardo' => 'Resguardo',
			'fecha_factura' => 'Fecha Factura',
			'fecha_alta' => 'Fecha Alta',
			'numero_factura' => 'Numero Factura',
			'imagen_factura' => 'Imagen Factura',
			'fuente_financiamiento' => 'Fuente Financiamiento',
			'proveedor' => 'Proveedor',
			'leyenda' => 'Leyenda',
			'ubicacion' => 'Ubicacion',
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
		$criteria->compare('nombre_bien',$this->nombre_bien,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('numero_serie',$this->numero_serie,true);
		$criteria->compare('num_control_upp',$this->num_control_upp,true);
		$criteria->compare('costo',$this->costo,true);
		$criteria->compare('partida',$this->partida,true);
		$criteria->compare('resguardo',$this->resguardo);
		$criteria->compare('fecha_factura',$this->fecha_factura,true);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('numero_factura',$this->numero_factura);
		$criteria->compare('imagen_factura',$this->imagen_factura,true);
		$criteria->compare('fuente_financiamiento',$this->fuente_financiamiento,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('leyenda',$this->leyenda,true);
		$criteria->compare('ubicacion',$this->ubicacion);
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
	 * @return Consumible the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
