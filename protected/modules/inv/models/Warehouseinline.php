<?php

/**
 * This is the model class for table "stock_warehouseinline".
 *
 * The followings are the available columns in table 'stock_warehouseinline':
 * @property integer $id
 * @property integer $warehousein_id
 * @property integer $product_id
 * @property string $qty
 * @property string $description
 * @property string $price
 * @property string $discount
 * @property integer $wh_id
 * @property string $note
 * @property string $subtotal
 * @property string $subvat
 * @property integer $status
 * @property string $create_date
 * @property integer $create_uid
 * @property string $update_date
 * @property integer $update_uid
 * @property integer $uom_id
 *
 * The followings are the available model relations:
 * @property StockWarehousein $warehousein
 * @property ProductItem $product
 * @property ProductUom $uom
 */
class Warehouseinline extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Warehouseinline the static model class
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
		return 'inv_warehouseinline';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('product_id,uom_id,qty,price','required'),
			array('warehousein_id, product_id, status, create_uid, update_uid, uom_id', 'numerical', 'integerOnly'=>true),
			array('length, width, thickness', 'numerical'),
			array('description', 'length', 'max'=>255),
			array('price, subtotal, subvat', 'length', 'max'=>19),
			array('note, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, warehousein_id, product_id, qty, description, price, discount,  note, subtotal, subvat, status, create_date, create_uid, update_date, update_uid, uom_id', 'safe', 'on'=>'search'),
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
			'warehousein' => array(self::BELONGS_TO, 'Warehousein', 'warehousein_id'),
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
			'uom' => array(self::BELONGS_TO, 'Uom', 'uom_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels1()
	{
		return array(
			'id' => 'ID',
			'warehousein_id' => 'Warehousein',
			'product_id' => 'Product',
			'qty' => 'Qty',
			'description' => 'Description',
			'price' => 'Price',
			'discount' => 'Discount',
			'note' => 'Note',
			'subtotal' => 'subtotal',
			'subvat' => 'subvat',
			'status' => 'Status',
			'create_date' => 'Create Date',
			'create_uid' => 'Create Uid',
			'update_date' => 'Update Date',
			'update_uid' => 'Update Uid',
			'uom_id' => 'Uom',
		);
	}
   
	public function beforeSave(){
       parent::beforeSave();
      $p=$this->product; 
      if(!isset($p))
	  $p=Product::model()->findByPk($this->product_id);
      $this->description=$p->name;
      $this->subtotal= $this->qty * $this->price;
      $this->radio=1;
      if($this->uom_id==$p->uom_id){
        $this->radio=1;
      }else if($this->uom_id==$p->po_uom_id){
        $this->radio=$p->pouom_radio_std/$p->pouom_radio;
      }else if($this->uom_id==$p->so_uom_id){
        $this->radio=$p->souom_radio_std/$p->souom_radio;
      }else if($this->uom_id==$p->work_uom_id){
        $this->radio=$p->workuom_radio_std/$p->workuom_radio;
      }
      $this->qtystd=$this->qty*$this->radio;
     return true;
	}   
    

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function searchAdv($search)
	{
	   
        $fdate = date('Y-m-d',CDateTimeParser::parse($search->fdate, 'dd-MM-yyyy'));
        $tdate= date('Y-m-d',CDateTimeParser::parse($search->tdate, 'dd-MM-yyyy'));
		$criteria=new CDbCriteria;
        $criteria->together = true; 
        if(isset($search)){
        $criteria->with=array('warehousein');
		$criteria->compare('warehousein.wh_id',$search->whid);
        $criteria->addBetweenCondition('warehousein.date',$fdate,$tdate);
        $criteria->addCondition('warehousein.status>0');
        }
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
	
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('subvat',$this->subvat,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_uid',$this->update_uid);
		$criteria->compare('uom_id',$this->uom_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}