<?php

/**
 * This is the model class for table "stock_warehouseoutline".
 *
 * The followings are the available columns in table 'stock_warehouseoutline':
 * @property integer $id
 * @property integer $warehouseout_id
 * @property integer $product_id
 * @property string $qty
 * @property string $description
 * @property string $price
 * @property integer $wh_id
 * @property string $note
 * @property string $subtotal
 * @property string $subvat
 * @property string $create_date
 * @property integer $create_uid
 * @property string $update_date
 * @property integer $update_uid
 * @property integer $uom_id
 * @property string $factor
 *
 * The followings are the available model relations:
 * @property ProductUom $uom
 * @property StockWarehouseout $warehouseout
 * @property ProductItem $product
 * @property StockWarehouse $wh
 */
class Warehouseoutline extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Warehouseoutline the static model class
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
		return 'inv_warehouseoutline';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, qty,uom_id', 'required'),
			array('warehouseout_id, product_id, create_uid, update_uid, uom_id,counter', 'numerical', 'integerOnly'=>true),
			array('qty, radio', 'length', 'max'=>50),
			array('description', 'length', 'max'=>255),
			array('counter, subtotal, subvat', 'length', 'max'=>50),
			array('note, create_date, update_date', 'safe'),
            array('counter', 'counterRules'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, warehouseout_id, product_id, qty, description, note, subtotal, subvat, create_date, create_uid, update_date, update_uid, uom_id ', 'safe', 'on'=>'search'),
		);
	}

        public function counterRules()
        {
          if(!isset($this->product)) return; 
          $product = $this->product;
          if($product->hascounter){
            if(($this->counter==='' || $this->counter==null)){
              $this->addError('counter', "$this->description: phải nhập Counter!");
              }
        }}



	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'warehouseout' => array(self::BELONGS_TO, 'Warehouseout', 'warehouseout_id'),
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
            'uom' => array(self::BELONGS_TO, 'Uom', 'uom_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'warehouseout_id' => 'Warehouseout',
			'product_id' => 'Product',
			'qty' => 'Qty',
			'description' => 'Description',
			'price' => 'Price',
            'counter' => 'Counter',
			'note' => 'Note',
			'subtotal' => 'Subtotal',
			'subvat' => 'Subvat',
			'create_date' => 'Create Date',
			'create_uid' => 'Create Uid',
			'update_date' => 'Update Date',
			'update_uid' => 'Update Uid',
			'uom_id' => 'Uom',
			'radio' => 'radio',
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
        $criteria->with=array('warehouseout');
		$criteria->compare('warehouseout.wh_id',$search->whid);
        $criteria->addBetweenCondition('warehouseout.date',$fdate,$tdate);
        $criteria->addCondition('warehouseout.status>0');
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

		$criteria->compare('id',$this->id);
		$criteria->compare('warehouseout_id',$this->warehouseout_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('note',$this->note,true);

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