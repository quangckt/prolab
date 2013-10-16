<?php

/**
 * This is the model class for table "hr_time_recorder".
 *
 * The followings are the available columns in table 'hr_time_recorder':
 * @property integer $id
 * @property string $date
 * @property integer $emp_id
 * @property string $time_in
 * @property string $time_out
 */
class TimeRecorder extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TimeRecorder the static model class
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
		return 'hr_time_recorder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, emp_id', 'required'),
			array('emp_id', 'numerical', 'integerOnly'=>true),
			array('time_in, time_out', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date, emp_id, time_in, time_out', 'safe', 'on'=>'search'),
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
            'emp' => array(self::BELONGS_TO, 'Employee', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'Date',
			'emp_id' => 'Emp',
			'time_in' => 'Time In',
			'time_out' => 'Time Out',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('emp_id',$this->emp_id);
		$criteria->compare('time_in',$this->time_in,true);
		$criteria->compare('time_out',$this->time_out,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}