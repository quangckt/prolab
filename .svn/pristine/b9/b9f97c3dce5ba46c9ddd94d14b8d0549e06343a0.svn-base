<?php

/**
 * This is the model class for table "hr_shift_replace".
 *
 * The followings are the available columns in table 'hr_shift_replace':
 * @property integer $id
 * @property integer $old_emp_id
 * @property integer $new_emp_id
 * @property string $date
 * @property integer $old_detail_id
 * @property integer $new_detail_id
 * @property string $note
 */
class ShiftReplace extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShiftReplace the static model class
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
		return 'hr_shift_replace';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('old_emp_id, new_emp_id, detail_id,note', 'required'),
			array('id, old_emp_id, new_emp_id,detail_id', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, old_emp_id, new_emp_id, date, detail_id, note', 'safe', 'on'=>'search'),
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
            'Detail' => array(self::BELONGS_TO, 'ShiftDetail', 'detail_id'),
            'oldEmp'=> array(self::BELONGS_TO, 'Employee', 'old_emp_id'),
            'newEmp'=> array(self::BELONGS_TO, 'Employee', 'new_emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'old_emp_id' => 'Old Emp',
			'new_emp_id' => 'New Emp',
			'detail_id' => 'Detail',
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
		$criteria->compare('old_emp_id',$this->old_emp_id);
		$criteria->compare('new_emp_id',$this->new_emp_id);
		$criteria->compare('detail_id',$this->detail_id);
		$criteria->compare('note',$this->note,true);
        $criteria->compare('plan_id',$this->plan_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
            'defaultOrder'=>array(
                'id'=>true,)
        ),            
		));
	}
}