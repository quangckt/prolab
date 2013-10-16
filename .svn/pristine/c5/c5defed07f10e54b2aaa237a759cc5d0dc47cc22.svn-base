<?php

/**
 * This is the model class for table "hr_timekeeping".
 *
 * The followings are the available columns in table 'hr_timekeeping':
 * @property integer $id
 * @property integer $emp_id
 * @property string $date
 * @property integer $time_recorder_id
 * @property integer $shift_details_id
 * @property integer $stipulate_work_id
 * @property integer $stipulate_inOut_id
 * @property integer $status_id
 * @property string $note
 */
class Timekeeping extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Timekeeping the static model class
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
		return 'hr_timekeeping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_id,stipulate_work_id,stipulate_inout_id, time_recorder_id, shift_details_id, status_id', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, emp_id, date, time_recorder_id, shift_details_id, status_id, note', 'safe', 'on'=>'search'),
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
            'shiftdetails' => array(self::BELONGS_TO, 'ShiftDetail', 'shift_details_id'),
            'timeRecorder' => array(self::BELONGS_TO, 'TimeRecorder', 'time_recorder_id'),
            
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'emp_id' => 'Emp',
			'date' => 'Date',
			'time_recorder_id' => 'Time Recorder',
			'shift_details_id' => 'Shift Details',
			'status_id' => 'Status',
			'note' => 'Note',
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
		$criteria->compare('emp_id',$this->emp_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time_recorder_id',$this->time_recorder_id);
		$criteria->compare('shift_details_id',$this->shift_details_id);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}