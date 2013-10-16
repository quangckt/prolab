<?php

/**
 * This is the model class for table "product_uom".
 *
 * The followings are the available columns in table 'product_uom':
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property ProductTemplate[] $productTemplates
 * @property ProductUomConvert[] $productUomConverts
 * @property ProductUomConvert[] $productUomConverts1
 */
class Uom extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Uom the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'product_uom';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'unique',),
            array('name', 'required'),
            array('name', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'productTemplates' => array(self::HAS_MANY, 'ProductTemplate', 'uom_id'),
            'productUomConverts' => array(self::HAS_MANY, 'ProductUomConvert', 'convert_to_id'),
            'productUomConverts1' => array(self::HAS_MANY, 'ProductUomConvert', 'uom_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels1() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
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
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}