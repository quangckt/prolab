<?php

/**
 * This is the model class for table "rec_customer".
 *
 * The followings are the available columns in table 'rec_customer':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $company
 * @property integer $tel
 * @property integer $phone
 * @property string $manager
 * @property string $email
 * @property string $address
 * @property string $area
 * @property string $produce
 * @property string $otherInfo
 * @property integer $emp_id
 */
class Customer extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Customer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'rec_customer';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tel, phone, emp_id', 'numerical', 'integerOnly' => true),
            array('code, name, manager, email, area, produce', 'length', 'max' => 255),
            array('company, address, otherInfo', 'length', 'max' => 300),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code, name, company, tel, phone, manager, email, address, area, produce, otherInfo, emp_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'detailscustomer' => array(self::HAS_MANY, 'Detailcustomer', 'rec_cus_id'),
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
            'company' => 'Company',
            'tel' => 'Tel',
            'phone' => 'Phone',
            'manager' => 'Manager',
            'email' => 'Email',
            'address' => 'Address',
            'area' => 'Area',
            'produce' => 'Produce',
            'otherInfo' => 'Other Info',
            'emp_id' => 'Emp',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('company', $this->company, true);
        $criteria->compare('tel', $this->tel);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('manager', $this->manager, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('area', $this->area, true);
        $criteria->compare('produce', $this->produce, true);
        $criteria->compare('otherInfo', $this->otherInfo, true);
        $criteria->compare('emp_id', $this->emp_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}