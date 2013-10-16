<?php

/**
 * This is the model class for table "sys_branch".
 *
 * The followings are the available columns in table 'sys_branch':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $tel
 *
 * The followings are the available model relations:
 * @property ProductTemplate[] $productTemplates
 * @property PurchaseOrder[] $purchaseOrders
 * @property SaleSaleman[] $saleSalemen
 * @property SalesOrder[] $salesOrders
 * @property StockTransfer[] $stockTransfers
 * @property StockWarehouse[] $stockWarehouses
 */
class Branch extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Branch the static model class
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
		return 'sys_branch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name, address, tel', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, address, tel', 'safe', 'on'=>'search'),
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
			'productTemplates' => array(self::HAS_MANY, 'ProductTemplate', 'branch_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'branch_id'),
			'saleSalemen' => array(self::HAS_MANY, 'SaleSaleman', 'branch_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'branch_id'),
			'stockTransfers' => array(self::HAS_MANY, 'StockTransfer', 'branch_id'),
			'stockWarehouses' => array(self::HAS_MANY, 'StockWarehouse', 'branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'address' => 'Address',
			'tel' => 'Tel',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tel',$this->tel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
     public function createlink(){
        	if(isset($this->id))
			return CHtml::link($this->name,array('/sys/branch/view&id='.$this->id));
		else
			return $this->name;
     }
}