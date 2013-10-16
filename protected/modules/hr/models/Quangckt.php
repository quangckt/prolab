<?php

/**
 * This is the model class for table "hr_batch".
 *
 * The followings are the available columns in table 'hr_batch':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $date
 * @property string $qty
 * @property string $amt
 * @property string $note
 * @property string $dateloan
 * @property string $monthloan
 * @property integer $type
 */
class Quangckt extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Quangckt the static model class
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
		return 'hr_batch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'numerical', 'integerOnly'=>true),
			array('code, name, note', 'length', 'max'=>255),
			array('qty, amt, monthloan', 'length', 'max'=>10),
			array('date, dateloan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, date, qty, amt, note, dateloan, monthloan, type', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'name' => 'Name',
			'date' => 'Date',
			'qty' => 'Qty',
			'amt' => 'Amt',
			'note' => 'Note',
			'dateloan' => 'Dateloan',
			'monthloan' => 'Monthloan',
			'type' => 'Type',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('amt',$this->amt,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('dateloan',$this->dateloan,true);
		$criteria->compare('monthloan',$this->monthloan,true);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}