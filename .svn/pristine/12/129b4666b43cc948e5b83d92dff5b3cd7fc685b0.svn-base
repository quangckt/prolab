<?php

/**
 * This is the model class for table "stock_warehouse".
 *
 * The followings are the available columns in table 'stock_warehouse':
 * @property integer $id
 * @property string $name
 * @property integer $branch_id
 * @property integer $active
 * @property integer $create_uid
 * @property string $create_date
 * @property integer $update_uid
 * @property string $update_date
 *
 * The followings are the available model relations:
 * @property ProductTemplate[] $productTemplates
 * @property PurchaseOrder[] $purchaseOrders
 * @property SalesOrderLine[] $salesOrderLines
 * @property StockInventory[] $stockInventories
 * @property StockTransferLine[] $stockTransferLines
 * @property branch $branch
 
 */
class warehouse extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockWarehouse1 the static model class
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
		return 'inv_warehouse';
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
			array('branch_id, active, create_uid, update_uid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('create_date, update_date,isM', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, branch_id, active, create_uid, create_date, update_uid, update_date,isM', 'safe', 'on'=>'search'),
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
			'productTemplates' => array(self::HAS_MANY, 'ProductTemplate', 'default_wh_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'wh_id'),
			'salesOrderLines' => array(self::HAS_MANY, 'SalesOrderLine', 'wh_id'),
			'stockInventories' => array(self::HAS_MANY, 'StockInventory', 'wh_id'),
			'stockTransferLines' => array(self::HAS_MANY, 'StockTransferLine', 'from_wh_id'),
			'branch' => array(self::BELONGS_TO, 'Branch', 'branch_id'),
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
			'branch_id' => 'Branch',
			'active' => 'Active',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'update_uid' => 'Update Uid',
			'update_date' => 'Update Date',
            'default_wh_out'=>'Kho xu?t v?t tu m?t d?nh',
            'default_wh_in'=>'Kho nh?p v?t tu m?t d?nh',
            'isM'=>'Là kho sản xuất'
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

	   $criteria=new CDbCriteria();

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('active',$this->active);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_uid',$this->update_uid);
		$criteria->compare('update_date',$this->update_date,true);
        $criteria->compare('isM',$this->isM,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}