<?php

/**
 * This is the model class for table "hr_stipulate_timeinout".
 *
 * The followings are the available columns in table 'hr_stipulate_timeinout':
 * @property integer $id
 * @property integer $type
 * @property string $time_from
 * @property string $rate
 * @property string $note
 * @property string $time_to
 */
class StipulateTimeinout extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StipulateTimeinout the static model class
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
		return 'hr_stipulate_timeinout';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type,typeSoonLate,general_timeinout_id', 'numerical', 'integerOnly'=>true),
			array('time, rate,', 'length', 'max'=>10),
			array('note', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type,status,typeSoonLate,create_date, time, rate, note,', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'time_from' => 'Time From',
			'rate' => 'Rate',
			'note' => 'Note',
			'time_to' => 'Time To',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('time_from',$this->time_from,true);
		$criteria->compare('rate',$this->rate,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('time_to',$this->time_to,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}