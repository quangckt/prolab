<?php

class BaseModel extends CActiveRecord
{
    protected static $_fields = null; // one copy of fields for all instances of this model
    protected $loadlabel =true;
    protected function queryFields()
    {
        if (!isset(self::$_fields))
            // only look up fields if they haven't already been looked up

            self::$_fields = Fields::model()->findAllByAttributes(array('modelName' =>
                get_class($this)));
    }
    

 public function setAttributes($values,$safeOnly=true) {
    if(!is_array($values)) return;
    $attributes=array_flip($safeOnly ? $this->getSafeAttributeNames() : $this->attributeNames());
    foreach($values as $name=>$value) {
      if(isset($attributes[$name])) {
        $column = $this->getTableSchema()->getColumn($name); // new
        if (stripos($column->dbType, 'decimal') !== false) // new
          $value = Yii::app()->format->unformatNumber($value); // new
        $this->$name=$value;
      }
      else if($safeOnly)
        $this->onUnsafeAttribute($name,$value);
    }
  }
      
   

    /**
     * @return string the route to view this model
     */
    public function getDefaultRoute()
    {
        return strtolower(get_class($this)); // assume the model name is the same as the controller
    }

    /**
     * @return string the route to this model's AutoComplete data source
     */
    public function getAutoCompleteSource()
    {
        return '/' . strtolower(get_class($this)) . '/getItems'; // assume the model name is the same as the controller
    }

    /**
     * Generates validation rules for custom fields
     * @return array validation rules for model attributes.
     */
    public function rules()
    {

        $this->queryFields();

        $fieldRules = array('required' => array(), 'email' => array(), 'int' => array(),
            'date' => array(), 'float' => array(), 'boolean' => array(), 'safe' => array(), );

        foreach (self::$_fields as & $_field)
        {

            switch ($_field->type)
            {
                case 'varchar':
                case 'text':
                case 'url':
                case 'currency':
                case 'dropdown':
                    $fieldRules['safe'][] = $_field->fieldName; // these field types have no rules, but still need to be allowed
                    break;
                case 'date':
                    $fieldRules['int'][] = $_field->fieldName; // date is actually an int
                    break;
                default:
                    $fieldRules[$_field->type][] = $_field->fieldName; // otherwise use the type as the validator name
            }

            if ($_field->required)
                $fieldRules['required'][] = $_field->fieldName;
        }

        return array(array(implode(',', $fieldRules['required']), 'required'), array(implode
            (',', $fieldRules['email']), 'email'), array(implode(',', $fieldRules['int'] + $fieldRules['date']),
            'numerical', 'integerOnly' => true), array(implode(',', $fieldRules['float']),
            'numerical'), array(implode(',', $fieldRules['boolean']), 'boolean'), array(implode
            (',', $fieldRules['safe']), 'safe'), );
    }

    /**
     * Returns custom attribute values defined in x2_fields
     * @return array customized attribute labels (name=>label)
     * @see generateAttributeLabel
     */
    public function attributeLabels()
    {

        $this->queryFields();
        $labels = array();
        foreach (self::$_fields as & $_field)
            $labels[$_field->fieldName] = Yii::t(strtolower(get_class($this)), $_field->
                attributeLabel);
        return $labels;
    }

    /**
     * z * Returns the text label for the specified attribute.
     * This method overrides the parent implementation by supporting
     * returning the label defined in relational object.
     * In particular, if the attribute name is in the form of "post.author.name",
     * then this method will derive the label from the "author" relation's "name" attribute.
     * @param string $attribute the attribute name
     * @return string the attribute label
     * @see generateAttributeLabel
     * @since 1.1.4
     */
    public function getAttributeLabel($attribute)
    {
        $this->queryFields();
        // don't call attributeLabels(), just look in self::$_fields
        foreach (self::$_fields as & $_field)
        {
            if ($_field->fieldName == $attribute)
                return Yii::t(strtolower(get_class($this)), $_field->attributeLabel);
        }
        // original Yii code
        if (strpos($attribute, '.') !== false)
        {
            $segs = explode('.', $attribute);
            $name = array_pop($segs);
            $model = $this;
            foreach ($segs as $seg)
            {
                $relations = $model->getMetaData()->relations;
                if (isset($relations[$seg]))
                    $model = CActiveRecord::model($relations[$seg]->className);
                else
                    break;
            }
            return $model->getAttributeLabel($name);
        } else
            return $this->generateAttributeLabel($attribute);
    }

    public function getFields()
    {
        $this->queryFields();
        return self::$_fields;
    }


    /**
     * Sets attributes using X2Fields
     * @param array &$data array of attributes to be set (eg. $_POST['Contacts'])
     */
    public function setX2Fields(&$data)
    {
        $this->queryFields();

        foreach (self::$_fields as & $_field)
        { // now loop through fields to deal with special types
            $fieldName = $_field->fieldName;

            if (!$_field->readOnly && isset($data[$fieldName]))
            { // skip fields that are read-only or haven't been set

                $value = $data[$fieldName];

                if ($value == $this->getAttributeLabel($fieldName))
                    // eliminate placeholder values

                    $value = '';

                if ($_field->type == 'assignment' && $_field->linkType == 'multiple')
                {
                    $value = Accounts::parseUsers($value);
                } elseif ($_field->type == 'date')
                {
                    $value = Yii::app()->controller->parseDate($value);
                    if ($value === false)
                        $value = null;
                } elseif ($_field->type == 'link' && !empty($_field->linkType))
                {

                    if (!empty($value) && isset($data[$fieldName . '_id']))
                    { // check the ID, if provided
                        $linkId = $data[$fieldName . '_id'];
                        if (!empty($linkId) && CActiveRecord::model($_field->linkType)->
                            countByAttributes(array('id' => $linkId))) // if the link model actually exists,

                            $value = $linkId; // then use the ID as the field value
                    }
                    if (!empty($value) && !ctype_digit($value))
                    { // if the field is sitll text, try to find the ID based on the name

                        $linkModel = CActiveRecord::model($_field->linkType)->findByAttributes(array('name' =>
                            $value));
                        if (isset($linkModel))
                            $value = $linkModel->id;
                    }
                }
                $this->$fieldName = $value;
            }
        }
    }

    /**
     * Base search function, includes Retrieves a list of models based on the current search/filter conditions.
     * @param CDbCriteria $criteria the attribute name
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function searchBase($criteria)
    {

        $this->queryFields();

        $this->compareAttributes($criteria);

        return new SmartDataProvider(get_class($this), array('sort' => array('defaultOrder' =>
            'id DESC', ), 'pagination' => array('pageSize' => ProfileChild::
            getResultsPerPage(), ), 'criteria' => $criteria, ));
    }

    public function compareAttributes(&$criteria)
    {
        $this->queryFields();

        foreach (self::$_fields as & $field)
        {
            $fieldName = $field['fieldName'];
            switch ($field['type'])
            {
                case 'boolean':
                    $criteria->compare($fieldName, $this->compareBoolean($this->$fieldName), true);
                    break;
                default:
                    $criteria->compare($fieldName, $this->$fieldName, true);
            }
        }
    } 

    protected function compareLookup($linkType, $value)
    {
        if (is_null($value) || $value == "")
            return null;

        $linkType = ucfirst($linkType);

        if (class_exists($linkType))
        {
            $class = new $linkType;
            $tableName = $class->tableName();

            if ($linkType == 'Contacts')
                $linkIds = Yii::app()->db->createCommand()->select('id')->from($tableName)->
                    where(array('like', 'CONCAT(firstName," ",lastName)', "%$value%"))->queryColumn();
            else
                $linkIds = Yii::app()->db->createCommand()->select('id')->from($tableName)->
                    where(array('like', 'name', "%$value%"))->queryColumn();

            return empty($linkIds) ? -1 : $linkIds;
        }
        return - 1;
    }

    protected function compareBoolean($data)
    {
        if (is_null($data))
        {
            return null;
        }
        return in_array(mb_strtolower(trim($data)), array(0, 'f', 'false', Yii::t('actions',
            "No"))) ? 0 : 1; // default to true unless recognized as false
    }

    protected function compareAssignment($data)
    {
        if (is_null($data))
            return null;

        $userNames = Yii::app()->db->createCommand()->select('username')->from('tbl_users')->
            where(array('like', 'CONCAT(firstName," ",lastName)', "%$data%"))->queryColumn();
        return (count($userNames) == 0) ? -1 : $userNames;
    }

    public function createLink()
    {
        if (isset($this->id))
        if (isset($this->name))
            return CHtml::link($this->name, array($this->getDefaultRoute().'/view&id=' . $this->id));
        if (isset($this->num))
            return CHtml::link($this->num, array($this->getDefaultRoute().'/view&id=' . $this->id));
        return '';    
    }
    
     public function updateLink()
    {
           if (isset($this->id))
        if (isset($this->name))
            return CHtml::link($this->name, array($this->getDefaultRoute().'/update&id=' . $this->id));
        if (isset($this->num))
            return CHtml::link($this->num, array($this->getDefaultRoute().'/update&id=' . $this->id));
        return '';
    }
    
    public function getBranchName()
    {
        if ($this->hasAttribute('branch_id'))
        return Branch::model()->findbyPk($this->branch_id)->name;
        else
            return '';
    }
    
    
    public function init(){
    if ($this->hasAttribute('create_uid'))
        $this->create_uid=$this->create_uid==null?Yii::app()->user->id:$this->create_uid;
    }
    
    public function getCreateName()
    {
        if ($this->hasAttribute('create_uid')){
         $u=User::model()->findbyPk($this->create_uid);
         if(isset($u))
            return User::model()->findbyPk($this->create_uid)->username;
         else return "";   
        }
        else
            return '';
    }
    

    
    public function getUpdateName()
    {
        
        if ($this->hasAttribute('update_uid'))
        return User::model()->findbyPk($this->update_uid)->username; 
        else
             return '';
    }    
    
    
    public function beforeValidate(){
        if ($this->hasAttribute('branch_id')&& $this->branch_id==null)
        {
            $user = Yii::app()->getModule('user')->user(Yii::app()->user->id);
            $this->branch_id = $user->branch_id;
        } 
      return parent::beforeValidate();  
    }
    
    
    public function beforeSave()
    {
                if ($this->isNewRecord)
                {
                    if ($this->hasAttribute('create_uid'))
                        $this->create_uid = Yii::app()->user->id;
                    if ($this->hasAttribute('create_date'))
                        $this->create_date=Yii::app()->dateFormatter->formatDateTime(time(), 'medium', 'medium'); 
                        
                } 
            if ($this->hasAttribute('update_uid')){
                $this->update_uid = Yii::app()->user->id;
                }
            if ($this->hasAttribute('update_date')){
                $this->update_date= Yii::app()->dateFormatter->formatDateTime(time(), 'medium', 'medium');                                           
                } 

   
        
    //        foreach($this->getTableSchema()->columns as $name => $column)
//            {
//                if (preg_match(self::REGEX_DECIMALS,$column->dbType,$m) && ($value=$this->$name)!==null){
//                    $this->$name= str_replace('.','',$this->$name);
//                    $this->$name= str_replace(',','.',$this->$name);
//                   var_dump($this->$name);
//                  
//                 }  
//                  
//            }

      return parent::beforeSave();
    }
    public function behaviors()
    {
        return array(
               //'defaults'=>array(
               ///     'class'=>'ext.decimali18nbehavior.DecimalI18NBehavior',
               //     'parseExpression'=>"str_replace(',','',\$value)",
               //     'formats'=>array('factor'=>'#0.#########'),
               // ),
               'DateTimeI18NBehavior'=>array('class' => 'ext.DateTimeI18NBehavior.DateTimeI18NBehavior',),                
               'activerecord-relation'=>array('class'=>'ext.yiiext.EActiveRecordRelationBehavior',),
                'EJsonBehavior'=>array(
               'class'=>'ext.EJsonBehavior.EJsonBehavior'
                 ),
        );
    }
    


}
