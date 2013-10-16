<?php

/**
 * This is the model class for table "hr_salary".
 *
 * The followings are the available columns in table 'hr_salary':
 * @property integer $id
 * @property string $monthYear
 * @property integer $emp_id
 * @property string $salGrade
 * @property string $allowanJob
 * @property string $minSal
 * @property string $directSal
 * @property string $borrow
 * @property string $backPay
 * @property string $advance
 * @property string $advanPay
 * @property string $otherRec
 * @property string $sociInsuran
 */
class Salary extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Salary the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_salary';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('emp_id', 'numerical', 'integerOnly' => true),
            array('monthYear', 'length', 'max' => 250),
            array('salGrade, allowanJob, minSal, directSal, borrow, backPay, advance, advanPay, otherRec, sociInsuran', 'length', 'max' => 19),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, monthYear, emp_id, salGrade, allowanJob, minSal, directSal, borrow, backPay, advance, advanPay, otherRec, sociInsuran', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'monthYear' => 'Month Year',
            'emp_id' => 'Emp',
            'salGrade' => 'Sal Grade',
            'allowanJob' => 'Allowan Job',
            'minSal' => 'Min Sal',
            'directSal' => 'Direct Sal',
            'borrow' => 'Borrow',
            'backPay' => 'Back Pay',
            'advance' => 'Advance',
            'advanPay' => 'Advan Pay',
            'otherRec' => 'Other Rec',
            'sociInsuran' => 'Soci Insuran',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('monthYear', $this->monthYear, true);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('salGrade', $this->salGrade, true);
        $criteria->compare('allowanJob', $this->allowanJob, true);
        $criteria->compare('minSal', $this->minSal, true);
        $criteria->compare('directSal', $this->directSal, true);
        $criteria->compare('borrow', $this->borrow, true);
        $criteria->compare('backPay', $this->backPay, true);
        $criteria->compare('advance', $this->advance, true);
        $criteria->compare('advanPay', $this->advanPay, true);
        $criteria->compare('otherRec', $this->otherRec, true);
        $criteria->compare('sociInsuran', $this->sociInsuran, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchOtherRecPay() {
        return new CActiveDataProvider('Employee', array(
            'criteria' => array(
                'condition' => 'status=0',
            ),
            'sort' => array(
                'defaultOrder' => array(
                    'shop_id' => true,
                    'department_id' => true,
                ),
            ),
            'pagination' => array(
                'pageSize' => 1000,
            ),
        ));
    }

}