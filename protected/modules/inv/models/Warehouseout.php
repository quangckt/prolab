<?php

/**
 * This is the model class for table "stock_warehouseout".
 *
 * The followings are the available columns in table 'stock_warehouseout':
 * @property integer $id
 * @property string $num
 * @property string $date
 * @property string $note
 * @property integer $type_id
 * @property string $create_date
 * @property integer $create_uid
 * @property string $update_date
 * @property integer $update_uid
 * @property integer $status
 * @property integer $branch_id
 * @property string $amounttotal
 *
 * The followings are the available model relations:
 * @property StockWarehouseoutline[] $stockWarehouseoutlines
 */
class Warehouseout extends BaseModel {

    public $displayStatus = 'Chưa xuất kho';
    public $displayType = 'Xuất sản xuất';

    const STATUS_NEW = 0;
    const STATUS_APPROVED = 1;
    const STATUS_CANCEL = -1;
    const STATUS_LOCKED = 2;
    const TYPE_WORKER = 1;
    const TYPE_OTHER = 2;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Warehouseout the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inv_warehouseout';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('num, date, branch_id,wh_id', 'required'),
            array('type_id, create_uid, update_uid, status, branch_id,wh_id', 'numerical', 'integerOnly' => true),
            array('num', 'length', 'max' => 50),
            array('amounttotal', 'length', 'max' => 50),
            // array('wh_id', 'check_wh'),
            array('note, create_date, update_date, pp_id', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, num, date, note, type_id, create_date, create_uid, wh_id,update_date, update_uid, status, branch_id, amounttotal', 'safe', 'on' => 'search'),
        );
    }

    public function check_wh($attribute, $params) {
        $w = WarehouseoutType::model()->findByPk($this->type_id);
        if (!isset($w))
            return;
        if ($w->wh_req == null)
            return;
        $validate = in_array($this->$attribute, explode(',', $w->wh_req));
        if ($validate)
            return;
        $this->addError($attribute, 'Chọn kho chưa đúng!');
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'warehouseoutlines' => array(self::HAS_MANY, 'Warehouseoutline', 'warehouseout_id'),
            'wh' => array(self::BELONGS_TO, 'Warehouse', 'wh_id'),
            'type' => array(self::BELONGS_TO, 'WarehouseoutType', 'type_id'),
            'printerplan' => array(self::BELONGS_TO, 'PrinterPlan', 'pp_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels1() {
        return array(
            'id' => 'ID',
            'num' => 'Num',
            'date' => 'Date',
            'note' => 'Note',
            'type_id' => 'Type',
            'wh_id' => 'wh_id',
            'create_date' => 'Create Date',
            'create_uid' => 'Create Uid',
            'update_date' => 'Update Date',
            'update_uid' => 'Update Uid',
            'status' => 'Status',
            'branch_id' => 'Branch',
            'amounttotal' => 'Amounttotal',
        );
    }

    public function getStatus() {
        return array(
            self::STATUS_NEW => 'Chưa xuất kho',
            self::STATUS_APPROVED => 'Đã xuất kho',
            self::STATUS_CANCEL => 'Hủy xuất kho',
            self::STATUS_LOCKED => 'Đã khóa phiếu');
    }

    protected function afterFind() {
        parent::afterFind();
        $l = $this->getStatus();
        if (isset($this->status))
            $this->displayStatus = $l[$this->status];
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
        $criteria->compare('num', $this->num, true);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('type_id', $this->type);
        $criteria->compare('wh_id', $this->wh_id);
        $criteria->compare('create_date', $this->create_date, true);
        $criteria->compare('create_uid', $this->create_uid);
        $criteria->compare('update_date', $this->update_date, true);
        $criteria->compare('update_uid', $this->update_uid);
        $criteria->compare('status', $this->status);
        $criteria->compare('branch_id', $this->branch_id);
        $criteria->compare('amounttotal', $this->amounttotal, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => array(
                    'id' => true,)
            ),
        ));
    }

}