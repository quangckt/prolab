<?php

/**
 * This is the model class for table "hr_shift".
 *
 * The followings are the available columns in table 'hr_shift':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $fodate
 * @property string $tdate
 * @property integer $department_id
 * @property integer $isovernight
 * @property string $starttime
 * @property string $endtime
 * @property string $note
 * @property integer $status
 */
class Shift extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shift the static model class
	 */
      public $nameTime;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hr_shift';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, starttime, endtime', 'required'),
			array(' isovernight, status', 'numerical', 'integerOnly'=>true),
			array('code, name, note', 'length', 'max'=>255),
            array('starttime, endtime', 'type', 'type'=>'time', 'timeFormat'=>'hh:mm'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, isovernight, starttime, endtime, note, status', 'safe', 'on'=>'search'),
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
            'shiftPlan'=>array(self::BELONGS_TO, 'shiftPlan', 'shift_plan_id'),
            'shiftDetails'=> array(self::HAS_MANY, 'ShiftDetail', 'shift_id'),  
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'isovernight' => 'Isovernight',
			'starttime' => 'Starttime',
			'endtime' => 'Endtime',
			'note' => 'Note',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
    public function getNameTime(){
       return $this->nameTime=$this->name.':'.$this->starttime.'=>'.$this->endtime;
     }
     
     
   protected function afterFind()
    {
       parent::afterFind();
      $this->getNameTime(); 
    } 
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('isovernight',$this->isovernight);
		$criteria->compare('starttime',$this->starttime,true);
		$criteria->compare('endtime',$this->endtime,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('status',$this->status);
        $criteria->compare('shift_plan_id',$this->shift_plan_id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}