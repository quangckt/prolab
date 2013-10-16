<?php

/**
 * This is the model class for table "hr_review_working".
 *
 * The followings are the available columns in table 'hr_review_working':
 * @property integer $id
 * @property integer $emp_id
 * @property integer $date
 * @property integer $shift_details_id
 * @property integer $status_working_id
 * @property string $note
 * @property integer $create_uid
 * @property integer $update_uid
 */
class ReviewWorking extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ReviewWorking the static model class
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
		return 'hr_review_working';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_id, date,department_id, create_uid', 'required'),
			array('emp_id, shift_details_id,department_id, status_working_id, create_uid, update_uid', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, emp_id,department_id, date, shift_details_id, status_working_id, note, create_uid, update_uid', 'safe', 'on'=>'search'),
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
			'emp_id' => 'Emp',
			'date' => 'Date',
			'shift_details_id' => 'Shift Details',
			'status_working_id' => 'Status Working',
			'note' => 'Note',
			'create_uid' => 'Create Uid',
			'update_uid' => 'Update Uid',
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
		$criteria->compare('date',$this->date);
		$criteria->compare('shift_details_id',$this->shift_details_id);
		$criteria->compare('status_working_id',$this->status_working_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('update_uid',$this->update_uid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function listEmpWorks(){
        $count=Yii::app()->db->createCommand("SELECT COUNT(d.id)
            FROM hr_shift_detail d
            INNER JOIN hr_employee e ON d.emp_id = e.id
            INNER JOIN hr_shift s ON s.id = d.shift_id
            WHERE e.department_id =3 AND d.date ='2012-11-14'")->queryScalar();
        $sql="SELECT CONCAT(e.`code`,'-',e.lastname) codeandname , s.starttime,s.endtime,
            IFNULL((SELECT w.id FROM hr_review_working w WHERE w.date = d.date AND w.emp_id = e.id),-d.id) id,
            IFNULL((SELECT w.status_working_id FROM hr_review_working w WHERE w.date = d.date AND w.emp_id = e.id),-1) status_id
            FROM hr_shift_detail d
            INNER JOIN hr_employee e ON d.emp_id = e.id
            INNER JOIN hr_shift s ON s.id = d.shift_id
            WHERE e.department_id =3 AND d.date ='2012-11-14'";
        $data = new CSqlDataProvider($sql, array(
            'keyField' => 'id',
            'totalItemCount'=>$count,
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        return $data;
    }
}