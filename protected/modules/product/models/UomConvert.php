<?php

/**
 * This is the model class for table "product_uom_convert".
 *
 * The followings are the available columns in table 'product_uom_convert':
 * @property integer $id
 * @property integer $product_id
 * @property integer $uom_id
 * @property integer $convert_to_id
 * @property string $factor
 * @property string $rounding
 * @property string $Note
 *
 * The followings are the available model relations:
 * @property ProductUom $convertTo
 * @property ProductUom $uom
 * @property ProductItem $product
 */
class UomConvert extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UomConvert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_uom_convert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uom_id, convert_to_id, factor', 'required'),
			array('product_id, uom_id, convert_to_id', 'numerical', 'integerOnly'=>true),
            array('factor', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, uom_id, convert_to_id, factor', 'safe', 'on'=>'search'),
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
			'convertTo' => array(self::BELONGS_TO, 'ProductUom', 'convert_to_id'),
			'uom' => array(self::BELONGS_TO, 'ProductUom', 'uom_id'),
			'product' => array(self::BELONGS_TO, 'ProductItem', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'uom_id' => 'Uom',
			'convert_to_id' => 'Convert To',
			'factor' => 'Factor',
			'rounding' => 'Rounding',
			'Note' => 'Note',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('uom_id',$this->uom_id);
		$criteria->compare('convert_to_id',$this->convert_to_id);
		$criteria->compare('factor',$this->factor,true);
		$criteria->compare('rounding',$this->rounding,true);
		$criteria->compare('Note',$this->Note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}