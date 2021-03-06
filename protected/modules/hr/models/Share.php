<?php

/**
 * This is the model class for table "hr_share".
 *
 * The followings are the available columns in table 'hr_share':
 * @property integer $id
 * @property string $valueofstock
 * @property string $totalassets
 * @property string $note
 */
class Share extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Share the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'hr_share';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('valueofstock', 'required'),
            array('valueofstock', 'numerical', 'integerOnly' => true),
            array('valueofstock, totalassets', 'length', 'max' => 10),
            array('note', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, valueofstock, totalassets, note', 'safe', 'on' => 'search'),
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
            'valueofstock' => 'Valueofstock',
            'totalassets' => 'Totalassets',
            'note' => 'Note',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('valueofstock', $this->valueofstock, true);
        $criteria->compare('totalassets', $this->totalassets, true);
        $criteria->compare('note', $this->note, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function scopes()
    {
        return array(
            'lastRecord' => array(
                //'condition' => 'userid = ' . Yii::app()->user->id . ' AND status = 1',
                'order' => 'id DESC',
                'limit' => 1,
            ),
        );
    }
}