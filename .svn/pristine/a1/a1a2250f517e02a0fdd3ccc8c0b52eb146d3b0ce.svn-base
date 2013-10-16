<?php

/**
 * This is the model class for table "hr_shift_plan".
 *
 * The followings are the available columns in table 'hr_shift_plan':
 * @property integer $id
 * @property integer $department_id
 * @property string $startdate
 * @property string $enddate
 * @property integer $status
 * @property string $note
 */
class ShiftPlan extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShiftPlan the static model class
	 */
     
    public $nameEx;
       
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hr_shift_plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_id,name, startdate, enddate, status', 'required'),
			array('department_id, status', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
            array('startdate, enddate', 'date','format'=>'d-M-yyyy'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, department_id, startdate, enddate, status, note', 'safe', 'on'=>'search'),
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
        'department'=>array(self::BELONGS_TO, 'Department', 'department_id'),
        'shifts' => array(self::HAS_MANY, 'Shift', 'shift_plan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'department_id' => 'Department',
			'startdate' => 'Startdate',
			'enddate' => 'Enddate',
			'status' => 'Status',
			'note' => 'Note',
		);
	}


    protected function afterFind()
    {
       parent::afterFind();
      $this->nameEx=$this->name." - ".$this->department->name; 
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
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('enddate',$this->enddate,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}