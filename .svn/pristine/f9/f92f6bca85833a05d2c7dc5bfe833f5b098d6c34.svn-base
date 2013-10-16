<?php

/**
 * This is the model class for table "rec_worklist".
 *
 * The followings are the available columns in table 'rec_worklist':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $product_uom_id
 * @property integer $rec_waycallprice_id
 * @property integer $rec_aggregatesale_id
 * @property integer $rec_detailsale_id
 * @property integer $rec_grouprevenue_id
 * @property integer $rec_process_id
 * @property integer $rec_materiproduct_id
 * @property string $productout
 * @property string $materilogical1
 * @property string $materilogical2
 * @property string $materilogical3
 * @property integer $notmateri
 * @property integer $notvalue
 * @property integer $user_id
 * @property integer $type
 */
class Worklist extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Worklist the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'rec_worklist';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code, name, product_uom_id, rec_waycallprice_id, rec_aggregatesale_id, rec_detailsale_id, rec_grouprevenue_id, rec_process_id, rec_materiproduct_id', 'required'),
            array('code, name,', 'unique'),
            array('product_uom_id, rec_waycallprice_id, rec_aggregatesale_id, rec_detailsale_id, rec_grouprevenue_id, rec_process_id, rec_materiproduct_id, notmateri, notvalue, user_id', 'numerical', 'integerOnly' => true),
            array('code, name, productout, materilogical1, materilogical2, materilogical3', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('code, name, product_uom_id, rec_waycallprice_id, rec_aggregatesale_id, rec_detailsale_id, rec_grouprevenue_id, rec_process_id, rec_materiproduct_id, productout, materilogical1, materilogical2, materilogical3, notmateri, notvalue, user_id, type', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'uom' => array(self::BELONGS_TO, 'Uom', 'product_uom_id'),
            'waycalcprice' => array(self::BELONGS_TO, 'Waycalcprice', 'rec_waycallprice_id'),
            'aggregatesales' => array(self::BELONGS_TO, 'Aggregatesales', 'rec_aggregatesale_id'),
            'detailssales' => array(self::BELONGS_TO, 'Detailssales', 'rec_detailsale_id'),
            'grouprevenue' => array(self::BELONGS_TO, 'Grouprevenue', 'rec_grouprevenue_id'),
            'processes' => array(self::BELONGS_TO, 'Processes', 'rec_process_id'),
            'materialproduction' => array(self::BELONGS_TO, 'Materialproduction', 'rec_materiproduct_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'product_uom_id' => 'Product Uom',
            'rec_waycallprice_id' => 'Rec Waycallprice',
            'rec_aggregatesale_id' => 'Rec Aggregatesale',
            'rec_detailsale_id' => 'Rec Detailsale',
            'rec_grouprevenue_id' => 'Rec Grouprevenue',
            'rec_process_id' => 'Rec Process',
            'rec_materiproduct_id' => 'Rec Materiproduct',
            'productout' => 'Productout',
            'materilogical1' => 'Materilogical1',
            'materilogical2' => 'Materilogical2',
            'materilogical3' => 'Materilogical3',
            'notmateri' => 'Notmateri',
            'notvalue' => 'Notvalue',
            'user_id' => 'User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search($type) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('product_uom_id', $this->product_uom_id);
        $criteria->compare('rec_waycallprice_id', $this->rec_waycallprice_id);
        $criteria->compare('rec_aggregatesale_id', $this->rec_aggregatesale_id);
        $criteria->compare('rec_detailsale_id', $this->rec_detailsale_id);
        $criteria->compare('rec_grouprevenue_id', $this->rec_grouprevenue_id);
        $criteria->compare('rec_process_id', $this->rec_process_id);
        $criteria->compare('rec_materiproduct_id', $this->rec_materiproduct_id);
        $criteria->compare('productout', $this->productout, true);
        $criteria->compare('materilogical1', $this->materilogical1, true);
        $criteria->compare('materilogical2', $this->materilogical2, true);
        $criteria->compare('materilogical3', $this->materilogical3, true);
        $criteria->compare('notmateri', $this->notmateri);
        $criteria->compare('notvalue', $this->notvalue);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('type', $type);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}