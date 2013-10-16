<?php

/**
 * This is the model class for table "hr_profit".
 *
 * The followings are the available columns in table 'hr_profit':
 * @property integer $id
 * @property string $date
 * @property string $amt
 * @property string $amtdebit
 * @property string $note
 */
class Profit extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Profit the static model class
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
        return 'hr_profit';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('amt, date', 'required'),
            array('amt, amtdebit, rateLoan', 'length', 'max' => 19),
            array('date, note, type, batch_id', 'safe'),
            array('note', 'length', 'max' => 255, 'on' => 'insert,update'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, amt, amtdebit, note', 'safe', 'on' => 'search'),
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
            'date' => 'Date',
            'amt' => 'Amt',
            'amtdebit' => 'Amtdebit',
            'note' => 'Note',
            'rateLoan' => 'RateLoan',
            'type' => 'Type',
            'batch_id' => 'Batch_id',
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
        $criteria->compare('amt', $this->amt, true);
        $criteria->compare('amtdebit', $this->amtdebit, true);
        $criteria->compare('note', $this->note, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}