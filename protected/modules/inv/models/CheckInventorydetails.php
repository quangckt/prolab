<?php

/**
 * This is the model class for table "inv_check_inventorydetails".
 *
 * The followings are the available columns in table 'inv_check_inventorydetails':
 * @property integer $id
 * @property string $qty
 * @property integer $check_inventory_id
 * @property integer $product_id
 * @property string $last_update
 */
class CheckInventorydetails extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CheckInventorydetails the static model class
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
		return 'inv_check_inventorydetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('qty, check_inventory_id, product_id, uom_id, description', 'required'),
			array('check_inventory_id, product_id, uom_id', 'numerical', 'integerOnly'=>true),
			array('qty', 'length', 'max'=>10),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, qty, check_inventory_id, product_id, uom_id, description ', 'safe', 'on'=>'search'),
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
            'checkInventory' => array(self::BELONGS_TO, 'CheckInventory', 'check_inventory_id'),
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'qty' => 'Qty',
			'check_inventory_id' => 'Check Inventory',
			'product_id' => 'Product',
			'uom_id' => 'Uom',
			'description' => 'Description',
			'radio' => 'Radio',
			'qtystd' => 'Qtystd',
		);
	}
    public function beforeSave(){
       parent::beforeSave();
      $p=$this->product; 
      if(!isset($p))
	  $p=Product::model()->findByPk($this->product_id);
      $this->description=$p->name;
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
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('check_inventory_id',$this->check_inventory_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('uom_id',$this->uom_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('radio',$this->radio,true);
		$criteria->compare('qtystd',$this->qtystd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}