<?php

/**
 * This is the model class for table "hr_relation".
 *
 * The followings are the available columns in table 'hr_relation':
 * @property integer $id
 * @property integer $emp_id
 * @property integer $type_relation
 * @property string $fullname
 * @property string $birthday
 * @property string $weddingday
 * @property integer $numofbrothers
 * @property integer $numofsiters
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property HrEmployee $emp
 */
class EmpRelation extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Relation the static model class
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
		return 'hr_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('type_relation', 'required'),
			array('emp_id, type_relation, numofbrothers, numofsiters', 'numerical', 'integerOnly'=>true),
			array('fullname, notes', 'length', 'max'=>255),
			array('birthday, weddingday', 'safe'),
            array('birthday,weddingday', 'date','format'=>'d-M-yyyy'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, emp_id, type_relation, fullname, birthday, weddingday, numofbrothers, numofsiters, notes', 'safe', 'on'=>'search'),
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
			'emp_id' => 'Emp',
			'type_relation' => 'Type Relation',
			'fullname' => 'Fullname',
			'birthday' => 'Birthday',
			'weddingday' => 'Weddingday',
			'numofbrothers' => 'Numofbrothers',
			'numofsiters' => 'Numofsiters',
			'notes' => 'Notes',
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
		$criteria->compare('type_relation',$this->type_relation);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('weddingday',$this->weddingday,true);
		$criteria->compare('numofbrothers',$this->numofbrothers);
		$criteria->compare('numofsiters',$this->numofsiters);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}