<?php

/**
 * This is the model class for table "stock_warehousein".
 *
 * The followings are the available columns in table 'stock_warehousein':
 * @property integer $id
 * @property string $num
 * @property string $date
 * @property string $note
 * @property string $invdate
 * @property string $invnum
 * @property integer $supplier_id
 * @property integer $paymentterm
 * @property integer $paid
 * @property string $create_date
 * @property integer $create_uid
 * @property string $update_date
 * @property integer $update_uid
 * @property integer $status
 * @property integer $branch_id
 * @property string $amounttotal
 * @property string $amounttax
 *
 * The followings are the available model relations:
 * @property SysPartner $supplier
 * @property StockWarehouseinline[] $stockWarehouseinlines
 */
class Warehousein extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Warehousein the static model class
	 */
     
   	const STATUS_NEW = 0;
	const STATUS_APPROVED = 1;
    const STATUS_CANCEL = -1;
	const STATUS_LOCKED = 2;
   
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_warehousein';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num,date,supplier_id,wh_id','required'),
			array('supplier_id, paymentterm, paid, create_uid, update_uid, status, branch_id', 'numerical', 'integerOnly'=>true),
			array('num, invnum', 'length', 'max'=>50),
			array('amounttotal, amounttax', 'length', 'max'=>50),
			array('date, note, invdate, create_date, update_date', 'safe'),
            
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, num, date, note, invdate, invnum, supplier_id, paymentterm, paid, wh_id,create_date, create_uid, update_date, update_uid, status, branch_id, amounttotal, amounttax', 'safe', 'on'=>'search'),
		);
	}

    public function Check_date($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            if(! strtotime($this->{$attribute}))
            {
                $this->addError($attribute,'The date is incorrect.');
            }
        }
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'supplier' => array(self::BELONGS_TO, 'Partner', 'supplier_id'),
			'warehouseinlines' => array(self::HAS_MANY, 'Warehouseinline', 'warehousein_id'),
            'sumAmount' => array(self::STAT, 'Warehouseinline', 'warehousein_id'),
            'wh' => array(self::BELONGS_TO, 'warehouse', 'wh_id'),            
            'user' => array(self::BELONGS_TO, 'User', 'create_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'num' => 'Số phiếu',
			'date' => 'Ngày',
			'note' => 'Note',
			'invdate' => 'Invdate',
			'invnum' => 'Invnum',
			'supplier_id' => 'Supplier',
			'paymentterm' => 'Paymentterm',
			'paid' => 'Paid',
            'wh_id'=>'wh_id',
			'create_date' => 'Create Date',
			'create_uid' => 'Create Uid',
			'update_date' => 'Update Date',
			'update_uid' => 'Update Uid',
			'status' => 'Status',
			'branch_id' => 'Branch',
			'amounttotal' => 'Amounttotal',
			'amounttax' => 'Amounttax',
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
		$criteria->compare('num',$this->num,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('invdate',$this->invdate,true);
		$criteria->compare('invnum',$this->invnum,true);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('paymentterm',$this->paymentterm);
		$criteria->compare('paid',$this->paid);
        $criteria->compare('wh_id',$this->wh_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_uid',$this->update_uid);
		$criteria->compare('status',$this->status);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('amounttotal',$this->amounttotal,true);
		$criteria->compare('amounttax',$this->amounttax,true);
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
            'defaultOrder'=>array(
                'id'=>true,)
        ),
		));
	}
    
   public $displayPaymentterm='Tiềm mặt';  
   public function getPaymentterm(){
        return array('0'=>'Tiền mặt','1'=>'Công nợ');
    }    
  
   public function getStatus(){
        return array(
            self::STATUS_NEW=>'Chưa nhập kho',
            self::STATUS_APPROVED=>'Đã nhập kho',
            self::STATUS_CANCEL=>'Hủy nhập kho',
            self::STATUS_LOCKED=>'Đã khóa phiếu');
    }
    
    public $displayStatus='Chưa nhập kho'; 
     
    protected function afterFind()
    {
        parent::afterFind();
        $l=$this->getStatus();
        $t=$this->getPaymentterm();
        if(isset($this->status))
        $this->displayStatus =$l[$this->status];
        $this->displayPaymentterm =$t[$this->paymentterm];
    }
}  