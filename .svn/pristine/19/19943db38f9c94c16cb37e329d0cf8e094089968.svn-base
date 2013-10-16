<?php

/**
 * This is the model class for table "sys_sequence".
 *
 * The followings are the available columns in table 'sys_sequence':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $number_next
 * @property string $prefix
 * @property string $suffix
 * @property integer $active
 * @property integer $branch_id
 */
class Sequence extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sequence the static model class
	 */
     
    private static $_items=array();
         
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sys_sequence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, active, branch_id', 'numerical', 'integerOnly'=>true),
			array('code, number_next, prefix, suffix', 'length', 'max'=>20),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, number_next, prefix, suffix, active, branch_id', 'safe', 'on'=>'search'),
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
			'number_next' => 'Number Next',
			'prefix' => 'Prefix',
			'suffix' => 'Suffix',
			'active' => 'Active',
			'branch_id' => 'Branch',
		);
	}
    
    
          /**
         * Returns the item name for the specified type and code.
         * @param string the item type (e.g. 'PostStatus').
         * @param integer the item code (corresponding to the 'code' column value)
         * @return string the item name for the specified the code. False is returned if the item type or code does not exist.
         */
        public static function item($code)
        {
          $m= self::model()->find(array(
                        'condition'=>'code=:code',
                        'params'=>array(':code'=>$code)
                ));
            $m->number_next=sprintf('%1$03d',$m->number_next);   
            return $m;               
        }
        
          /**
         * Returns the item name for the specified type and code.
         * @param string the item type (e.g. 'PostStatus').
         * @param integer the item code (corresponding to the 'code' column value)
         * @return string the item name for the specified the code. False is returned if the item type or code does not exist.
         */
        public static function addNum($code)
        {
          $m= self::model()->find(array(
                        'condition'=>'code=:code',
                        'params'=>array(':code'=>$code)
                ));
          $m->number_next +=1;
          $m->save(false);               
        }
         public function getNum()
        {
          return sprintf('%s %1$03d %s', $this->prefix,$this->number_next,$this->suffix); 
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
		$criteria->compare('number_next',$this->number_next,true);
		$criteria->compare('prefix',$this->prefix,true);
		$criteria->compare('suffix',$this->suffix,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('branch_id',$this->branch_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}