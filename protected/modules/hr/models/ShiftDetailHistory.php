<?php

/**
 * This is the model class for table "hr_shift_detail_history".
 *
 * The followings are the available columns in table 'hr_shift_detail_history':
 * @property integer $id
 * @property string $timeIn
 * @property string $timeOut
 * @property integer $shift_detail_id
 */
class ShiftDetailHistory extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ShiftDetailHistory the static model class
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
        return 'hr_shift_detail_history';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, shift_detail_id', 'required'),
            array('id, shift_detail_id', 'numerical', 'integerOnly' => true),
            array('timeIn, timeOut, timeInEdit, timeOutEdit, emp_id, note, userEdit, dayEdit, type, statusDayoff', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, timeIn, timeOut, shift_detail_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'timeIn' => 'Time In',
            'timeOut' => 'Time Out',
            'shift_detail_id' => 'Shift Detail',
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
        $criteria->compare('timeIn', $this->timeIn, true);
        $criteria->compare('timeOut', $this->timeOut, true);
        $criteria->compare('shift_detail_id', $this->shift_detail_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}