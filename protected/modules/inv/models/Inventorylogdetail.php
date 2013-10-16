<?php

/**
 * This is the model class for table "stock_inventorylogdetail".
 *
 * The followings are the available columns in table 'stock_inventorylogdetail':
 * @property integer $id
 * @property integer $inventorylog_id
 * @property integer $product_id
 * @property string $description
 * @property integer $uom_id
 * @property string $qty
 * @property integer $wh_id
 * @property string $cost
 * @property integer $costmethod
 *
 * The followings are the available model relations:
 * @property StockWarehouse $wh
 * @property StockInventorylog $inventorylog
 * @property ProductItem $product
 */
class Inventorylogdetail extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inventorylogdetail the static model class
	 */
    public $refnum_search;
    public $refdate_search;
    public $remarks_search; 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_inventorylogdetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inventorylog_id, product_id, uom_id, wh_id, costmethod', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>255),
			array('qty, cost', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, inventorylog_id, product_id, description, uom_id, qty, wh_id, cost, costmethod', 'safe', 'on'=>'search'),
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
			'wh' => array(self::BELONGS_TO, 'Warehouse', 'wh_id'),
			'inventorylog' => array(self::BELONGS_TO, 'Inventorylog', 'inventorylog_id'),
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
			'inventorylog_id' => 'Inventorylog',
			'product_id' => 'Product',
			'description' => 'Description',
			'uom_id' => 'Uom',
			'qty' => 'Qty',
            'before_qty' => 'Before Qty',
            
            'after_qty' => 'After Qty',            
			'wh_id' => 'Wh',
			'cost' => 'Cost',
			'costmethod' => 'Costmethod',
		);
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
        $criteria->with=array('inventorylog');
        $criteria->addBetweenCondition('inventorylog.date',$fdate,$tdate);
        $criteria->compare('product_id',$search->pid);
		//$criteria->compare('uom_id',$search->uom->id);
		$criteria->compare('wh_id',$search->whid);
        $criteria->order = 'inventorylog.date,t.id';
        
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
         $datesearch =null;
         
         /*
         if($this->refdate_search!=null){
            $date = explode('-',$this->refdate_search);
            for($i=count($date)-1;$i>=0;$i--){
                 if($i==0){
                     $datesearch =$datesearch.''.$date[$i];
                     break;
                 }
                 $datesearch=$datesearch.''.$date[$i].'-';
             }
         }
         */
        $criteria->with = array('inventorylog');
		$criteria->compare('id',$this->id);
		$criteria->compare('inventorylog_id',$this->inventorylog_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('uom_id',$this->uom_id);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('wh_id',$this->wh_id);
		//$criteria->compare('cost',$this->cost,true);
		//$criteria->compare('costmethod',$this->costmethod);
        $criteria->compare('inventorylog.refnum',$this->refnum_search,true);
        //$criteria->compare('inventorylog.refdate',$datesearch,true);
        $criteria->compare('inventorylog.remarks',$this->remarks_search,true);
        $sort = new CSort;
        $sort->attributes = array(
            'refnum_search'=>array(
                'asc'=>'inventorylog.refnum ASC',
                'desc'=>'inventorylog.refnum DESC',
            ),
            'refdate_search'=>array(
                'asc'=>'inventorylog.refdate ASC',
                'desc'=>'inventorylog.refdate DESC',
            ),
            'remarks_search'=>array(
                'asc'=>'inventorylog.remarks ASC',
                'desc'=>'inventorylog.remarks DESC',
            ),
            'id',
            'qty',
            'cost',
        );
        
        $sort->defaultOrder = array('id'=>true);

		$detail= new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>$sort,
		));
        return $detail;
	}
   


/**
 *   public  function beforeDelete(){
 *       if($this->updateInventory($this->product_id,$this->wh_id,-Utils::fixNumber($this->qty))){
 *          $p=$this->product;
 *          $p->qtyinstock=Utils::fixNumber($p->sumQtyInStock);
 *          $p->save(false);
 *       }
 *     return parent::beforeDelete();
 *  }
 */
    

}