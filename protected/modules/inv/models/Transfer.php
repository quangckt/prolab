<?php

/**
 * This is the model class for table "stock_transfer".
 *
 * The followings are the available columns in table 'stock_transfer':
 * @property integer $id
 * @property string $num
 * @property string $date
 * @property string $description
 * @property integer $status
 * @property integer $create_uid
 * @property string $create_date
 * @property integer $update_uid
 * @property string $update_date
 * @property integer $branch_id
 *
 * The followings are the available model relations:
 * @property SysBranch $branch
 * @property StockTransferline[] $stockTransferlines
 */
class Transfer extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transfer the static model class
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
		return 'inv_transfer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date,num, from_wh_id, to_wh_id', 'required'),
			array('id, status, create_uid, update_uid, branch_id,from_wh_id, to_wh_id', 'numerical', 'integerOnly'=>true),
			array('num', 'length', 'max'=>50),
			array('description', 'length', 'max'=>255),
			array('date, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, num, date, description, status, from_wh_id, to_wh_id,create_uid, create_date, update_uid, update_date, branch_id', 'safe', 'on'=>'search'),
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
			'transferlines' => array(self::HAS_MANY, 'Transferline', 'trans_id'),
			'fromWh' => array(self::BELONGS_TO, 'Warehouse', 'from_wh_id'),
			'toWh' => array(self::BELONGS_TO, 'Warehouse', 'to_wh_id'),            
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'num' => 'Num',
			'date' => 'Date',
			'description' => 'Description',
			'status' => 'Status',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'update_uid' => 'Update Uid',
			'update_date' => 'Update Date',
			'branch_id' => 'Branch',
            'from_wh_id' => 'from_wh_id',
            'to_wh_id' => 'to_wh_id',
		);
	}

     public function getStatus(){
        return array(self::STATUS_NEW =>'Chưa chuyển',self::STATUS_APPROVED=>'Đã chuyển',self::STATUS_LOCKED=>'Đã khóa');
    }
    
    public $displayStatus='Chưa chuyển kho'; 
    protected function afterFind()
    {
        parent::afterFind();
        $l=$this->getStatus();
        if(isset($this->status))
        $this->displayStatus =$l[$this->status] ;
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_uid',$this->update_uid);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('branch_id',$this->branch_id);
        $criteria->compare('from_wh_id',$this->from_wh_id);
        $criteria->compare('to_wh_id',$this->to_wh_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>array(
                'id'=>true,)
            ),
		));
	}
}

