<?php

/**
 * This is the model class for table "hr_paramsalary".
 *
 * The followings are the available columns in table 'hr_paramsalary':
 * @property integer $id
 * @property string $basic
 * @property string $amountOfRice
 * @property string $rateIndirecSal
 * @property string $productSal
 * @property string $totalBonusDirecSal
 * @property string $totalBonusIndirectSal
 * @property string $addIndirectSal
 * @property string $reserFundSal
 * @property string $shop_id
 * @property string $monthYear
 */
class Paramsalary extends BaseModel {

    public $month;
    public $year;
    public $duplicate;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Paramsalary the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_paramsalary';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('shop_id, basic, amountOfRice, rateIndirecSal, productSal, totalBonusDirecSal, totalBonusIndirectSal, addIndirectSal, reserFundSal', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('basic, amountOfRice, rateIndirecSal, productSal, totalBonusDirecSal, totalBonusIndirectSal, addIndirectSal, reserFundSal', 'length', 'max' => 19),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            //array('month, year, monthYear', 'safe'),
            array('id, basic, amountOfRice, rateIndirecSal, productSal, totalBonusDirecSal, totalBonusIndirectSal, addIndirectSal, reserFundSal, monthYear', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'shop' => array(self::BELONGS_TO, 'Shop', 'shop_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'basic' => 'Basic',
            'amountOfRice' => 'Amount Of Rice',
            'rateIndirecSal' => 'Rate Indirec Sal',
            'productSal' => 'Product Sal',
            'totalBonusDirecSal' => 'Total Bonus Direc Sal',
            'totalBonusIndirectSal' => 'Total Bonus Indirect Sal',
            'addIndirectSal' => 'Add Indirect Sal',
            'reserFundSal' => 'Reser Fund Sal',
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
        $criteria->compare('basic', $this->basic, true);
        $criteria->compare('amountOfRice', $this->amountOfRice, true);
        $criteria->compare('rateIndirecSal', $this->rateIndirecSal, true);
        $criteria->compare('productSal', $this->productSal, true);
        $criteria->compare('totalBonusDirecSal', $this->totalBonusDirecSal, true);
        $criteria->compare('totalBonusIndirectSal', $this->totalBonusIndirectSal, true);
        $criteria->compare('addIndirectSal', $this->addIndirectSal, true);
        $criteria->compare('reserFundSal', $this->reserFundSal, true);
        $criteria->compare('shop_id', $this->shop_id, true);
        $criteria->compare('monthYear', $this->monthYear, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => array(
                    'id' => true, //CÀI NÀY SORT TRƯỚC
                //'date' => false, //CÁI NÀY SORT SAU
                )
            ),
        ));
    }

}