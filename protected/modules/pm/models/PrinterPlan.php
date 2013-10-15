<?php

/**
 * This is the model class for table "inv_printer_plan".
 *
 * The followings are the available columns in table 'inv_printer_plan':
 * @property integer $id
 * @property string $datefrom
 * @property string $dateto
 * @property integer $inv_printer_id
 * @property integer $status
 */
class PrinterPlan extends BaseModel {

    const statusEnable = 0;
    const statusDisable = 1;

    public $statusEnable = '<span class="label label-info">Mở</span>';
    public $statusDisable = '<span class="label label-warning">Đóng</span>';
    public $statusEnableChoose = 'Mở';
    public $statusDisableChoose = 'Đóng';

    public function listStatus() {
        return array(
            static::statusEnable => $this->statusEnableChoose,
            static::statusDisable => $this->statusDisableChoose,
        );
    }

    public function getPrinterPlan() {
        return $this->datefrom . ' => ' . $this->dateto;
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return PrinterPlan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'pm_printer_plan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id', 'required', 'on' => 'createwithplan', 'message' => 'Chu kỳ ca máy không được phép rỗng'),
            array('datefrom, inv_printer_id', 'required', 'on' => 'create'),
            array('inv_printer_id', 'checkUnique', 'on' => 'create'),
            array('inv_printer_id', 'checkStatus', 'on' => 'create'),
            array('inv_printer_id, status', 'numerical', 'integerOnly' => true),
            array('datefrom, dateto', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, datefrom, dateto, inv_printer_id, status', 'safe', 'on' => 'search'),
        );
    }

    public function checkUnique() {
        $unique = $this->model()->find('datefrom=:datefrom and dateto=:dateto and inv_printer_id=:inv_printer_id', array(':datefrom' => date('Y-m-d', strtotime($this->datefrom)), ':dateto' => date('Y-m-d', strtotime($this->dateto)), ':inv_printer_id' => $this->inv_printer_id));
        if (!empty($unique)) {
            $this->addError('dateto', '');
            $this->addError('datefrom', '');
            $this->addError('inv_printer_id', '');
            $this->addError('id', 'Máy in "' . $this->printer->name . '" đã có chu kỳ ca từ ngày "' . $this->datefrom . '" tới ngày "' . $this->dateto . '"');
        }
    }

    public function checkStatus() {
        $status = $this->model()->find('datefrom<=:datefrom and inv_printer_id=:inv_printer_id', array(':datefrom' => date('Y-m-d', strtotime($this->datefrom)), ':inv_printer_id' => $this->inv_printer_id));
        if (!empty($status)) {
            if (!$status->status) {
                $this->addError('datefrom', '');
                $this->addError('inv_printer_id', '');
                $this->addError('id', 'Máy in "' . $status->printer->name . '" với chu kỳ ca từ ngày "' . $status->datefrom . '" tới ngày "' . $status->dateto . ' vẫn đang mở. <br/>Bạn phải đóng trước khi tạo chu kỳ mới!"');
            } else {
                if (date('Y-m-d', strtotime($status->dateto)) > date('Y-m-d', strtotime($this->datefrom))) {
                    $this->addError('inv_printer_id', '');
                    $this->addError('id', 'Máy in "' . $status->printer->name . '" với chu kỳ ca từ ngày "' . $status->datefrom . '" tới ngày "' . $status->dateto . ' vẫn đang mở. <br/>Bạn phải đóng trước khi tạo chu kỳ cũ!"');
                }
            }
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'printer' => array(self::BELONGS_TO, 'Printer', 'inv_printer_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'datefrom' => 'Datefrom',
            'dateto' => 'Dateto',
            'inv_printer_id' => 'Inv Printer',
            'status' => 'Status',
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
        if (!empty($this->id))
            $criteria->addCondition('id = "' . $this->id . '"');
        if (!empty($this->datefrom))
            $criteria->addCondition('datefrom = "' . date('Y-m-d', strtotime($this->datefrom)) . '"');
        if (!empty($this->dateto))
            $criteria->addCondition('dateto = "' . date('Y-m-d', strtotime($this->dateto)) . '"');
        if (!empty($this->inv_printer_id))
            $criteria->addCondition('inv_printer_id = "' . $this->inv_printer_id . '"');
        if (!empty($this->status))
            $criteria->addCondition('inv_printer_id = "' . $this->inv_printer_id . '"');

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}