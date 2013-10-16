<?php

/**
 * This is the model class for table "hr_payment".
 *
 * The followings are the available columns in table 'hr_payment':
 * @property integer $id
 * @property string $date
 * @property integer $type
 * @property integer $emp_id
 * @property integer $batch_id
 * @property string $note
 * @property string $amt
 * @property integer $tran_id
 * @property integer $period_id
 */
class Payment extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Payment the static model class
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
        return 'hr_payment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('amt', 'required'),
            array('type,type1, emp_id, batch_id, tran_id, period_id', 'numerical', 'integerOnly' => true),
            array('note', 'length', 'max' => 255),
            array('amt', 'length', 'max' => 19),
            array('date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, type, type1, emp_id, batch_id, note, amt, tran_id, period_id', 'safe', 'on' => 'search'),
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
            'type' => 'Type',
            'type1' => 'Type1',
            'emp_id' => 'Emp',
            'batch_id' => 'Batch',
            'note' => 'Note',
            'amt' => 'Amt',
            'tran_id' => 'Tran',
            'period_id' => 'Period',
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
        $criteria->compare('type', $this->type);
        $criteria->compare('type1', $this->type1);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('batch_id', $this->batch_id);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('amt', $this->amt, true);
        $criteria->compare('tran_id', $this->tran_id);
        $criteria->compare('period_id', $this->period_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getTotal($emp_id)
    {
        $total = 0;

        $provider = Payment::model()->findAll('type1=:type and emp_id=:emp_id', array(':type' => '3', ':emp_id' => $emp_id));
        foreach ($provider as $data) {
            $total += $data->amt;
        }
        return '<b>' . number_format($total, 0, ',', '.') . '</b>';
    }
}