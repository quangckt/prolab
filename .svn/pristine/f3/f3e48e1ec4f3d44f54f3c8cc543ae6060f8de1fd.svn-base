<?php

/**
 * This is the model class for table "sys_partner".
 *
 * The followings are the available columns in table 'sys_partner':
 * @property integer $id
 * @property string $code
 * @property string $part_name
 * @property string $tel
 * @property string $web
 * @property string $email
 * @property integer $active
 * @property string $create_date
 * @property integer $create_uid
 * @property string $update_date
 * @property integer $update_uid
 * @property integer $customer
 * @property integer $supplier
 * @property string $comment
 * @property integer $branch_id
 *
 * The followings are the available model relations:
 * @property SalesOrder[] $salesOrders
 * @property StockWarehousein[] $stockWarehouseins
 * @property PurchaseOrder $id0
 */
class Partner extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Partner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sys_partner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code,name', 'required'),
            array('code', 'unique',),
			array('id, active, create_uid, update_uid, customer, supplier, branch_id', 'numerical', 'integerOnly'=>true),
			array('code, tel', 'length', 'max'=>50),
			array('name, web, email', 'length', 'max'=>255),
            array('email', 'email'),
			array('create_date, update_date, comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, tel, web, email, active, create_date, create_uid, update_date, update_uid, customer, supplier, comment, branch_id', 'safe', 'on'=>'search'),
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
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'customer_id'),
			'stockWarehouseins' => array(self::HAS_MANY, 'StockWarehousein', 'supplier_id'),
			'id0' => array(self::BELONGS_TO, 'PurchaseOrder', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Part Name',
			'tel' => 'Tel',
			'web' => 'Web',
			'email' => 'Email',
			'active' => 'Active',
			'create_date' => 'Create Date',
			'create_uid' => 'Create Uid',
			'update_date' => 'Update Date',
			'update_uid' => 'Uudate Uid',
			'customer' => 'Customer',
			'supplier' => 'Supplier',
			'comment' => 'Comment',
			'branch_id' => 'Branch',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_uid',$this->update_uid);
		$criteria->compare('customer',$this->customer);
		$criteria->compare('supplier',$this->supplier);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('branch_id',$this->branch_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}