<?php

/**
 * This is the model class for table "rec_processes".
 *
 * The followings are the available columns in table 'rec_processes':
 * @property integer $id
 * @property string $code
 * @property integer $distribute
 * @property integer $scan
 * @property integer $process
 * @property integer $printImage
 * @property integer $productGC
 * @property integer $printPayment
 * @property integer $deliverStails
 * @property integer $deliverCustomer
 */
class Processes extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Processes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'rec_processes';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('distribute, scan, process, printImage, productGC, printPayment, deliverStails, deliverCustomer', 'numerical', 'integerOnly' => true),
            array('code', 'unique'),
            array('code', 'required'),
            array('code', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code, distribute, scan, process, printImage, productGC, printPayment, deliverStails, deliverCustomer', 'safe'),
            array('id, code, distribute, scan, process, printImage, productGC, printPayment, deliverStails, deliverCustomer', 'safe', 'on' => 'search'),
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
            'code' => 'Code',
            'distribute' => 'Distribute',
            'scan' => 'Scan',
            'process' => 'Process',
            'printImage' => 'Print Image',
            'productGC' => 'Product Gc',
            'printPayment' => 'Print Payment',
            'deliverStails' => 'Deliver Stails',
            'deliverCustomer' => 'Deliver Customer',
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
        $criteria->compare('code', $this->code, true);
        $criteria->compare('distribute', $this->distribute);
        $criteria->compare('scan', $this->scan);
        $criteria->compare('process', $this->process);
        $criteria->compare('printImage', $this->printImage);
        $criteria->compare('productGC', $this->productGC);
        $criteria->compare('printPayment', $this->printPayment);
        $criteria->compare('deliverStails', $this->deliverStails);
        $criteria->compare('deliverCustomer', $this->deliverCustomer);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'code ASC',
            )
        ));
    }

}