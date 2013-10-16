<?php

/**
 * This is the model class for table "hr_profit_detail".
 *
 * The followings are the available columns in table 'hr_profit_detail':
 * @property integer $id
 * @property integer $profit_id
 * @property integer $emp_id
 * @property string $amt
 * @property integer $type
 * @property string $date
 */
class ProfitDetail extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ProfitDetail the static model class
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
        return 'hr_profit_detail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('emp_id, amt, type, date', 'required'),
            array('profit_id, emp_id, type', 'numerical', 'integerOnly' => true),
            array('amt', 'length', 'max' => 19),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, profit_id, emp_id, amt, type, date', 'safe', 'on' => 'search'),
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
            'profit' => array(self::BELONGS_TO, 'Profit', 'profit_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'profit_id' => 'Profit',
            'emp_id' => 'Emp',
            'amt' => 'Amt',
            'type' => 'Type',
            'date' => 'Date',
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
        $criteria->compare('profit_id', $this->profit_id);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('amt', $this->amt, true);
        $criteria->compare('type', $this->type);
        $criteria->compare('date', $this->date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}