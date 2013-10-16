<?php

/**
 * This is the model class for table "rec_detailssales".
 *
 * The followings are the available columns in table 'rec_detailssales':
 * @property integer $id
 * @property string $name
 * @property integer $rec_aggreSale_id
 */
class Detailssales extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Detailssales the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'rec_detailssales';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name', 'testNew'),
            array('rec_aggreSale_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, rec_aggreSale_id', 'safe', 'on' => 'search'),
        );
    }

    public function testNew() {
        $unique = $this->model()->find('name=:name and rec_aggreSale_id=:rec_aggreSale_id', array(':name' => $this->name, ':rec_aggreSale_id' => $this->rec_aggreSale_id));
        if (!empty($unique)) {
            $this->addError('name', '');
            $this->addError('rec_aggreSale_id', '');
            $this->addError('id', 'Đã tồn tại chi tiết doanh số "' . $this->name . '" trong tổng hợp doanh số "' . $this->aggregatesales->name . '"');
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'aggregatesales' => array(self::BELONGS_TO, 'Aggregatesales', 'rec_aggreSale_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'rec_aggreSale_id' => 'Rec Aggre Sale',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('rec_aggreSale_id', $this->rec_aggreSale_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'rec_aggreSale_id ASC',
            )
        ));
    }

}