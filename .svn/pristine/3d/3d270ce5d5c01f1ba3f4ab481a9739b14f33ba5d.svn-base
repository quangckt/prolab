<?php

/**
 * This is the model class for table "hr_payperioddetail".
 *
 * The followings are the available columns in table 'hr_payperioddetail':
 * @property integer $id
 * @property string $date
 * @property string $note
 * @property string $amt
 * @property string $period
 * @property integer $payPeriod_id
 * @property integer $emp_id
 */
class Payperioddetail extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Payperioddetail the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'hr_payperioddetail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('payPeriod_id, emp_id', 'numerical', 'integerOnly' => true),
            array('note', 'length', 'max' => 255),
            array('amt, period', 'length', 'max' => 19),
            array('date type', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, note, amt, period, payPeriod_id, emp_id', 'safe', 'on' => 'search'),
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
            'employee' => array(self::BELONGS_TO, 'Employee', 'emp_id'),
            'payPeriod' => array(self::BELONGS_TO, 'Period', 'payPeriod_id'),
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
            'note' => 'Note',
            'amt' => 'Amt',
            'period' => 'Period',
            'payPeriod_id' => 'Pay Period',
            'emp_id' => 'Emp',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('amt', $this->amt, true);
        $criteria->compare('period', $this->period, true);
        $criteria->compare('payPeriod_id', $this->payPeriod_id);
        $criteria->compare('emp_id', $this->emp_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}