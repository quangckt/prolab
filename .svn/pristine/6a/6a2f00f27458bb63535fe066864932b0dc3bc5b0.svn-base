<?php

/**
 * This is the model class for table "hr_payrollrule".
 *
 * The followings are the available columns in table 'hr_payrollrule':
 * @property integer $id
 * @property string $name
 * @property string $op
 * @property string $val
 * @property string $rate
 * @property string $monthYear
 */
class Payrollrule extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Payrollrule the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_payrollrule';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name,val, rate', 'required'),
            array('name, op', 'length', 'max' => 255),
            array('type', 'numerical', 'integerOnly' => true),
            array('val, rate', 'length', 'max' => 19),
            array('monthYear', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, op, val, rate,type', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Mô tả',
            'op' => 'Điều kiện',
            'val' => 'Giá trị(ngày/phút)',
            'rate' => 'Tỷ lệ',
            'type' => 'Loại',
        );
    }

    public function getType() {
        return array(
            '1' => 'Quy định ngày làm việc',
            '2' => 'Quy định thưởng đến sớm',
            '3' => 'Quy định thưởng đến trể',
            '4' => 'Quy định thưởng về sớm',
            '5' => 'Quy định thưởng về trể',
            '6' => 'Quy định ngày nghỉ có đi làm'
        );
    }

    public function getOp() {
        return array('>=' => '>=', '<' => '<');
    }

    public function getTypetext($id) {
        $list = $this->getType();
        return $list[$id];
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('op', $this->op, true);
        $criteria->compare('val', $this->val, true);
        $criteria->compare('rate', $this->rate, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('monthYear', $this->monthYear, true);

        return new CActiveDataProvider($this, array(
                    'pagination' => array('pageSize' => '10000'),
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'type' => false, 'val' => false))
                ));
    }

}