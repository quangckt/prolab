<?php

/**
 * This is the model class for table "pm_proout".
 *
 * The followings are the available columns in table 'pm_proout':
 * @property integer $id
 * @property string $dateout
 * @property string $numout
 * @property string $note
 * @property integer $user1
 * @property integer $user2
 * @property string $existbegin
 * @property string $used
 * @property string $existend
 * @property integer $pm_print_id
 * @property integer $pm_printplan_id
 * @property integer $product_item_id
 */
class Proout extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proout the static model class
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
		return 'pm_proout';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, dateout, numout, user1', 'required'),
			array('id, user1, user2, pm_print_id, pm_printplan_id, product_item_id', 'numerical', 'integerOnly'=>true),
			array('numout', 'length', 'max'=>255),
			array('note', 'length', 'max'=>500),
			array('existbegin, used, existend', 'length', 'max'=>19),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dateout, numout, note, user1, user2, existbegin, used, existend, pm_print_id, pm_printplan_id, product_item_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dateout' => 'Dateout',
			'numout' => 'Numout',
			'note' => 'Note',
			'user1' => 'User1',
			'user2' => 'User2',
			'existbegin' => 'Existbegin',
			'used' => 'Used',
			'existend' => 'Existend',
			'pm_print_id' => 'Pm Print',
			'pm_printplan_id' => 'Pm Printplan',
			'product_item_id' => 'Product Item',
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
		$criteria->compare('dateout',$this->dateout,true);
		$criteria->compare('numout',$this->numout,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('user1',$this->user1);
		$criteria->compare('user2',$this->user2);
		$criteria->compare('existbegin',$this->existbegin,true);
		$criteria->compare('used',$this->used,true);
		$criteria->compare('existend',$this->existend,true);
		$criteria->compare('pm_print_id',$this->pm_print_id);
		$criteria->compare('pm_printplan_id',$this->pm_printplan_id);
		$criteria->compare('product_item_id',$this->product_item_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}