<?php

/**
 * This is the model class for table "hr_education".
 *
 * The followings are the available columns in table 'hr_education':
 * @property integer $id
 * @property integer $emp_id
 * @property string $study_at
 * @property integer $study_long
 * @property integer $study_field
 * @property integer $levelofedu
 * @property integer $finished_year
 *
 * The followings are the available model relations:
 * @property HrEmployee $emp
 * @property HrLevelofedu $hrLevelofedu
 * @property HrStudyField $hrStudyField
 */
class Education extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Education the static model class
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
		return 'hr_education';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('levelofedu', 'required'),
			array('emp_id, study_long, study_field, levelofedu, finished_year', 'numerical', 'integerOnly'=>true),
			array('study_at', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, emp_id, study_at, study_long, study_field, levelofedu, finished_year', 'safe', 'on'=>'search'),
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
			'emp' => array(self::BELONGS_TO, 'HrEmployee', 'emp_id'),
			'hrLevelofedu' => array(self::HAS_ONE, 'HrLevelofedu', 'id'),
			'hrStudyField' => array(self::HAS_ONE, 'HrStudyField', 'id'),
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
			'study_at' => 'Study At',
			'study_long' => 'Study Long',
			'study_field' => 'Study Field',
			'levelofedu' => 'Levelofedu',
			'finished_year' => 'Finished Year',
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
		$criteria->compare('study_at',$this->study_at,true);
		$criteria->compare('study_long',$this->study_long);
		$criteria->compare('study_field',$this->study_field);
		$criteria->compare('levelofedu',$this->levelofedu);
		$criteria->compare('finished_year',$this->finished_year);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}