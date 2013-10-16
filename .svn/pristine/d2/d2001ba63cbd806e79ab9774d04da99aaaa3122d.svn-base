<?php

/**
 * This is the model class for table "stock_inventorylog".
 *
 * The followings are the available columns in table 'stock_inventorylog':
 * @property integer $id
 * @property integer $ref_id
 * @property integer $reftype
 * @property string $remarks
 * @property string $refdate
 * @property integer $create_uid
 * @property string $create_date
 * @property integer $branch_id
 *
 * The followings are the available model relations:
 * @property StockInventorylogdetail[] $stockInventorylogdetails
 */
class Inventorylog extends BaseModel
{

    const REFTYPE_WH_IN =1;
    const REFTYPE_WH_OUT =2;
    const REFTYPE_TRANS =3;
    const REFTYPE_CHECK =4;
    const REFTYPE_WH_IN_CANCEL =-1;
    const REFTYPE_WH_OUT_CANCEL =-2;
    const REFTYPE_TRANS_CANCEL =-3;
    
   public static $getReftype=array(
                        self::REFTYPE_WH_IN =>'Nhập kho',
                        self::REFTYPE_WH_OUT =>'Xuất kho',
                        self::REFTYPE_WH_IN_CANCEL =>'Hủy nhập kho',
                        self::REFTYPE_WH_OUT_CANCEL =>'Hủy Xuất kho',
                        self::REFTYPE_TRANS =>'Chuyển kho',
                        self::REFTYPE_CHECK =>'Điều chỉnh kiểm kho',
                        self::REFTYPE_TRANS_CANCEL =>'Hủy chuyển kho',
                     );  
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inventorylog the static model class
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
		return 'inv_inventorylog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_id, reftype, create_uid, branch_id', 'numerical', 'integerOnly'=>true),
			array('remarks,refnum', 'length', 'max'=>255),
			array('refdate, create_date,date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ref_id, reftype, remarks, refdate, create_uid, create_date, branch_id', 'safe', 'on'=>'search'),
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
			'Inventorylogdetails' => array(self::HAS_MANY, 'Inventorylogdetail', 'inventorylog_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ref_id' => 'Ref',
			'reftype' => 'Reftype',
			'remarks' => 'Remarks',
			'refdate' => 'Refdate',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'branch_id' => 'Branch',
            'refnum' => 'Ref Num',
            'date' => 'Date',
		);
	}
    
   public function beforeSave(){
    $note = self::$getReftype[$this->reftype]; 
    if(!isset($this->remarks)|| $this->remarks==='' )
    $this->remarks=$note;
    $this->date= date('d-m-Y',time());   
    return parent::beforeSave();
   } 
    
   public function beforeDelete(){
     foreach ($this->Inventorylogdetails as $item)
     $item->delete();
    return parent::beforeDelete();
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
		$criteria->compare('ref_id',$this->ref_id);
		$criteria->compare('reftype',$this->reftype);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('refdate',$this->refdate,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('branch_id',$this->branch_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function advSearch(){
        
    }
}