<?php

/**
 * This is the model class for table "hr_grade".
 *
 * The followings are the available columns in table 'hr_grade':
 * @property integer $id
 * @property integer $emp_id
 * @property integer $a
 * @property integer $bc
 * @property string $monthyear
 * @property string $note
 * @property integer $dep_id
 * @property integer $type
 */
class Grade extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Grade the static model class
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
        return 'hr_grade';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('id, emp_id, dep_id', 'required'),
            array('note', 'required', 'on' => 'gradeNote'),
            array('id, emp_id, a, bc, dep_id, type', 'numerical', 'integerOnly' => true),
            array('monthyear, note, bonusMonth, bc', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, emp_id, a, bc, monthyear, note, dep_id, type', 'safe', 'on' => 'search'),
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
            'a' => 'A',
            'bc' => 'Bc',
            'monthyear' => 'Month Year',
            'note' => 'Note',
            'dep_id' => 'Dep',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('a', $this->a);
        $criteria->compare('bc', $this->bc);
        $criteria->compare('monthyear', $this->monthyear, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('dep_id', $this->dep_id);
        $criteria->compare('type', $this->type);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}