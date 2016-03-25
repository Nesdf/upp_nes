<?php

/**
 * This is the model class for table "grado".
 *
 * The followings are the available columns in table 'grado':
 * @property integer $id
 * @property string $acronimo
 * @property string $grado_academico
 */
class Grado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acronimo', 'length', 'max'=>45),
			array('grado_academico', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, acronimo, grado_academico', 'safe', 'on'=>'search'),
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
			'resguaro0'=>array(self::HAS_MANY, 'Grado', 'grado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'acronimo' => 'Acronimo',
			'grado_academico' => 'Grado Academico',
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
		$criteria->compare('acronimo',$this->acronimo,true);
		$criteria->compare('grado_academico',$this->grado_academico,true);

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
	 * @return Grado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
