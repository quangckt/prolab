<?php

/**
 * This is the model class for table "hr_shift_change".
 *
 * The followings are the available columns in table 'hr_shift_change':
 * @property integer $id
 * @property string $note
 * @property integer $form1_id
 * @property integer $to1_id
 * @property integer $form2_id
 * @property integer $to2_id
 */
class ShiftChange extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShiftChange the static model class
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
		return 'hr_shift_change';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('from_id, to_id,emp_from,emp_to,note', 'required'),
			array('from_id, to_id,emp_from,emp_to', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
            
            array('date_from', 'datefrom'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, note, from_id, to_id, emp_from,emp_to ', 'safe', 'on'=>'search'),
		);
	}


    public function datefrom($attribute,$params){
       if($this->date_from==$this->date_to)
       if( $this->detailFrom->shift_id==$this->detailTo->shift_id){
        $this->addError('from_id','Cùng ngày phải khác ca');
        //$this->addError('from2_id','Phải khác ca');
      }
      
      if($this->date_from!=$this->date_to)
       if( $this->detailFrom->shift_id!=$this->detailTo->shift_id){
        $this->addError('from_id','Khác ngày phải cùng ca');
       // $this->addError('from2_id','Phải cùng ca');
      }
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'detailFrom' => array(self::BELONGS_TO, 'ShiftDetail', 'from_id'),
            'detailTo' => array(self::BELONGS_TO, 'ShiftDetail', 'to_id'),
            'empFrom' => array(self::BELONGS_TO, 'Employee', 'emp_from'),
            'empTo' => array(self::BELONGS_TO, 'Employee', 'emp_to'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'note' => 'Lý do đổi',
			'from_id' => 'Form',
			'to_id' => 'To',
            'emp_from'=>'Từ nhân viên',
            'emp_to'=>'Ðến nhân viên',
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
		$criteria->compare('note',$this->note,true);
		$criteria->compare('from_id',$this->from_id);
		$criteria->compare('to_id',$this->to_id);
        $criteria->compare('plan_id',$this->plan_id);
        $criteria->compare('emp_from',$this->emp_from);
        $criteria->compare('emp_to',$this->emp_to);
        $criteria->compare('date_from',$this->date_from);
        $criteria->compare('date_to',$this->date_to);
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
            'defaultOrder'=>array(
                'id'=>true,)
        ),
		));
	}
}