<?php

/**
 * This is the model class for table "rec_detailscustomer".
 *
 * The followings are the available columns in table 'rec_detailscustomer':
 * @property integer $id
 * @property integer $rec_comp_id
 * @property integer $rec_cus_id
 */
class Detailcustomer extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Detailcustomer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'rec_detailscustomer';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('rec_comp_id, rec_cus_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, rec_comp_id, rec_cus_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'company' => array(self::BELONGS_TO, 'Company', 'rec_comp_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'rec_comp_id' => 'Rec Comp',
            'rec_cus_id' => 'Rec Cus',
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
        $criteria->compare('rec_comp_id', $this->rec_comp_id);
        $criteria->compare('rec_cus_id', $this->rec_cus_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}