<?php

/**
 * This is the model class for table "product_item".
 *
 * The followings are the available columns in table 'product_item':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $create_uid
 * @property string $create_date
 * @property integer $update_uid
 * @property string $update_date
 * @property string $description
 * @property integer $costmethod
 * @property integer $class
 * @property integer $category_id
 * @property string $type_id
 * @property integer $po_uom_id
 * @property integer $uom_id
 * @property integer $sale_uom_id
 * @property integer $work_uom_id
 * @property double $length
 * @property double $width
 * @property double $hegth
 * @property double $thickness
 * @property string $note
 * @property string $minqtystock
 * @property string $qtyinstock
 * @property integer $default_wh_id
 * @property string $lastcost
 * @property string $lastpodate
 * @property string $avgcost
 * @property string $stdcost
 * @property string $qtysale
 * @property string $qtypo
 * @property integer $active
 *
 * The followings are the available model relations:
 * @property ProductCategory $productCategory
 * @property SalesOrderLine $id0
 * @property ProductUom $uom
 * @property ProductType $type
 * @property ProductUomConvert[] $productUomConverts
 * @property PurchaseOrderLine[] $purchaseOrderLines
 * @property StockInventory[] $stockInventories
 * @property StockTransferLine[] $stockTransferLines
 */
class Product extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return product the static model class
	 */
    public $getCodeAndName='';
    public $getType='';  
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_item';
	}

	
	public function getClass()
	{
		return Lookup::item('ProductClass',$this->class);
	}
    
    public function getListUom()
	{
	   $crt= new CDbCriteria;
       $crt->addInCondition('id',array($this->uom_id,$this->po_uom_id,$this->so_uom_id));
		return Uom::model()->findAll($crt);
	}
    
     protected function afterFind()
    {
       parent::afterFind();
       $this->getCodeAndName = $this->code.' - '.$this->name;
    }
    

	/**
	 * @return array validation rules for model attributes.
	 */
    public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, category_id, uom_id', 'required'),
			array('index,create_uid, update_uid, costmethod, class, category_id, po_uom_id, uom_id, sale_uom_id, so_uom_id, work_uom_id, default_wh_id, active,hascounter', 'numerical', 'integerOnly'=>true),
			array('code, type_id', 'length', 'max'=>20),
			array('name, description', 'length', 'max'=>255),
            array('code', 'unique',),
			array('pouom_radio, pouom_radio_std, souom_radio, souom_radio_std', 'length', 'max'=>10),
			array('length, width, heigth, thickness, minqtystock, qtyinstock, lastcost, avgcost, stdcost, qtysale, qtypo, workuom_radio, workuom_radio_std', 'length', 'max'=>19),
			array('create_date, update_date, note, lastpodate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, create_uid, create_date, update_uid, update_date, description, costmethod, class,hascounter, category_id, type_id, po_uom_id, pouom_radio, pouom_radio_std, uom_id, sale_uom_id, so_uom_id, souom_radio, souom_radio_std, work_uom_id, length, width, heigth, thickness, note, minqtystock, qtyinstock, default_wh_id, lastcost, lastpodate, avgcost, stdcost, qtysale, qtypo, active, workuom_radio, workuom_radio_std', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'type'=>array(self::BELONGS_TO, 'ProductType', 'type_id'),
			'uom' => array(self::BELONGS_TO, 'Uom', 'uom_id'),
            'sumQtyInStock' => array(self::STAT, 'Inventory', 'product_id','select'=>'SUM(qty)'),
            'getAvgCost' => array(self::STAT, 'Inventorylogdetail', 'product_id','select'=>'SUM(subtotal)/SUM(qty)'),
            'inv_wh' => array(self::MANY_MANY, 'warehouse', 'inv_inventorylogdetail(product_id,wh_id)'),            
                        
		//	'purchaseOrderLines' => array(self::HAS_MANY, 'PurchaseOrderLine', 'product_id'),
		//	'stockInventories' => array(self::HAS_MANY, 'StockInventory', 'product_id'),
		//	'stockTransferLines' => array(self::HAS_MANY, 'StockTransferLine', 'product_id'),
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
			'name' => 'Name',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'update_uid' => 'Update Uid',
			'update_date' => 'Update Date',
			'description' => 'Description',
			'costmethod' => 'Costmethod',
			'class' => 'Class',
			'category_id' => 'Category',
			'type_id' => 'Type',
			'po_uom_id' => 'Po Uom',
			'uom_id' => 'Uom',
			'sale_uom_id' => 'Sale Uom',
			'work_uom_id' => 'Work Uom',
			'length' => 'Length',
			'width' => 'Width',
			'hegth' => 'Hegth',
			'thickness' => 'Thickness',
			'note' => 'Note',
			'minqtystock' => 'Minqtystock',
			'qtyinstock' => 'Qtyinstock',
			'default_wh_id' => 'Default Wh',
			'lastcost' => 'Lastcost',
			'lastpodate' => 'Lastpodate',
			'avgcost' => 'Avgcost',
			'stdcost' => 'Stdcost',
			'qtysale' => 'Qtysale',
			'qtypo' => 'Qtypo',
			'active' => 'Active',
		);
	}
    
    public function beforeSave(){
        parent::beforeSave();      
       if($this->costmethod===null) 
       $this->costmethod=1;
      return true; 
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
		//$criteria->compare('create_uid',$this->create_uid);
	//	$criteria->compare('create_date',$this->create_date,true);
	//	$criteria->compare('update_uid',$this->update_uid);
	//	$criteria->compare('update_date',$this->update_date,true);
	//  $criteria->compare('description',$this->description,true);
	//	$criteria->compare('costmethod',$this->costmethod);
		$criteria->compare('class',$this->class);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('po_uom_id',$this->po_uom_id);
		$criteria->compare('uom_id',$this->uom_id);
		$criteria->compare('sale_uom_id',$this->sale_uom_id);
		$criteria->compare('work_uom_id',$this->work_uom_id);
	//	$criteria->compare('note',$this->note,true);
	//	$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
		   'criteria'=>$criteria,
           'sort'=>array(
            'defaultOrder'=>array(
                'index'=>false)
        ),
		));
	}
}