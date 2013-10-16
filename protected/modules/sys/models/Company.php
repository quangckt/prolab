<?php

/**
 * This is the model class for table "sys_company".
 *
 * The followings are the available columns in table 'sys_company':
 * @property integer $id
 * @property string $company_name
 * @property string $logo
 * @property string $header
 * @property string $header1
 * @property string $header2
 * @property string $company_slogan
 * @property string $address
 * @property string $tel
 */
class Company extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'sys_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('name','required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('name, logo, company_slogan, address, tel', 'length', 'max'=>255),
			array('header, header1, header2', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, logo, header, header1, header2, company_slogan, address, tel', 'safe', 'on'=>'search'),
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


}