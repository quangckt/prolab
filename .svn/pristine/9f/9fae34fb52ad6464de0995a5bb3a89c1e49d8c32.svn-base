<?php

/**
 * This is the model class for table "stock_inventory".
 *
 * The followings are the available columns in table 'stock_inventory':
 * @property integer $id
 * @property integer $product_id
 * @property integer $wh_id
 * @property string $qty
 *
 * The followings are the available model relations:
 * @property ProductItem $product
 * @property StockWarehouse $wh
 */
class Inventory extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inventory the static model class
	 */
     
    public  $listQty=array();
     
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_inventory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, wh_id', 'numerical', 'integerOnly'=>true),
			array('qty', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, wh_id, qty', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
			'wh' => array(self::BELONGS_TO, 'Warehouse', 'wh_id'),
            'totalQty' => array(self::STAT, 'Warehouse', 'wh_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'wh_id' => 'Wh',
			'qty' => 'Qty',
            'listQty'=>'listQty'
		);
	}
    
    
	/**
	 * @return array 
	 */
	public function setListQty()
	{
	 $this->listQty=array(); 
	 $p= Product::model()->findByPk($this->product_id);
     $this->listQty[$p->uom_id]= array('name'=>Uom::model()->findByPk($p->uom_id)->name,'value'=>Yii::app()->format->formatNumberEx($this->qty,0),
     'minOfStock'=>Yii::app()->format->formatNumberEx($p->qtyinstock - $p->minqtystock,0)); 
     if($p->po_uom_id>0&&$p->pouom_radio_std!=0)
     $this->listQty[$p->po_uom_id]= array('name'=>Uom::model()->findByPk($p->po_uom_id)->name,'value'=>Yii::app()->format->formatNumberEx($this->qty*$p->pouom_radio/$p->pouom_radio_std,2),
     'minOfStock'=>Yii::app()->format->formatNumberEx($p->qtyinstock*$p->pouom_radio/$p->pouom_radio_std - $p->minqtystock*$p->pouom_radio/$p->pouom_radio_std,2));         
     if($p->so_uom_id>0&&$p->souom_radio_std!=0)
     $this->listQty[$p->so_uom_id]=array('name'=>Uom::model()->findByPk($p->so_uom_id)->name,'value'=>Yii::app()->format->formatNumberEx($this->qty*$p->souom_radio/$p->souom_radio_std,2),
     'minOfStock'=>Yii::app()->format->formatNumberEx($p->qtyinstock*$p->souom_radio/$p->souom_radio_std - $p->minqtystock*$p->souom_radio/$p->souom_radio_std,2));  
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('wh_id',$this->wh_id);
		$criteria->compare('qty',$this->qty,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function searchLimit()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
        $sql ='SELECT i.id
            FROM
            inv_limit l
            INNER JOIN product_item p ON l.product_id = p.id
            INNER JOIN inv_inventory i ON i.product_id = p.id
            WHERE l.wh_id = i.wh_id AND l.qtyLimit>=i.qty';
         $command = Yii::app()->db->createCommand($sql);
         $result = $command->queryAll();
         $pid =array();
         foreach($result as $id=> $item){
            $pid[$id]=$item['id'];
         }
        $criteria->addInCondition('id',$pid); 
		$criteria->compare('id',$this->id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('wh_id',$this->wh_id);
		$criteria->compare('qty',$this->qty,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
   
    
}