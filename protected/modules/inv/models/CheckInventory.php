<?php

/**
 * This is the model class for table "inv_check_inventory".
 *
 * The followings are the available columns in table 'inv_check_inventory':
 * @property integer $id
 * @property string $num
 * @property string $date
 * @property integer $wh_id
 * @property string $user_create
 * @property string $note
 */
class CheckInventory extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CheckInventory the static model class
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
		return 'inv_check_inventory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num, date,wh_id,create_uid', 'required'),
			array('id,wh_id,create_uid', 'numerical', 'integerOnly'=>true),
			array('num, note', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, num,date,create_uid, note,wh_id', 'safe', 'on'=>'search'),
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
            'checkInventorydetails' => array(self::HAS_MANY, 'CheckInventorydetails', 'check_inventory_id'),
            'wh' => array(self::BELONGS_TO, 'Warehouse', 'wh_id'),
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
			'wh_id' => 'Wh',
			'create_uid' => 'User Create',
			'note' => 'Note',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
     public function getStatus(){
        return array(self::STATUS_NEW =>'Chưa Duyệt',
                    self::STATUS_APPROVED=>'Đã Duyệt ',
                    self::STATUS_LOCKED=>'Đã khóa',
                    self::STATUS_CANCEL=>'Đã hủy',
                    
                    );
    }
    
    public $displayStatus='Chưa Duyệt'; 
    protected function afterFind()
    {
        parent::afterFind();
        $l=$this->getStatus();
        if(isset($this->status)){
			$this->displayStatus =$l[$this->status];
		}
    } 
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('num',$this->num,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('wh_id',$this->wh_id);
		$criteria->compare('create_uid',$this->create_uid,true);
		$criteria->compare('note',$this->note,true);
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}