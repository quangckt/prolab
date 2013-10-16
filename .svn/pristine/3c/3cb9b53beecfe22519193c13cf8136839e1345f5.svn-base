<?php

/**
 * This is the model class for table "hr_transaction".
 *
 * The followings are the available columns in table 'hr_transaction':
 * @property integer $id
 * @property string $date
 * @property integer $emp_id
 * @property string $qty
 * @property string $amt
 * @property integer $batch_id
 * @property string $note
 * @property integer $type
 */
class Transaction extends BaseModel
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Transaction the static model class
     */
    public $codeLastName;
    public $codeAndLastName;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'hr_transaction';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('amt, date, batch_id, qty, emp_id', 'required'),
            array('emp_id, batch_id, type', 'numerical', 'integerOnly' => true),
            array('qty, amt', 'length', 'max' => 19),
            array('note', 'length', 'max' => 255),
            array('date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, emp_id, qty, amt, batch_id, note, type', 'safe', 'on' => 'search'),
            array('batch_id', 'unRequired'),
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
            'batch' => array(self::BELONGS_TO, 'Batch', 'batch_id'),
            'employee' => array(self::BELONGS_TO, 'Employee', 'emp_id'),
            'payment' => array(self::HAS_MANY, 'Payment', 'tran_id'),
        );
    }

    public function unRequired($attribute, $params)
    {
        if ($this->$attribute == 0) {
            //$this->addError($attribute, 'please enter a valid email address.we have not got your account details from this email address !');
        }
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'date' => 'Date',
            'emp_id' => 'Emp',
            'qty' => 'Qty',
            'amt' => 'Amt',
            'batch_id' => 'Batch',
            'note' => 'Note',
            'type' => 'Type',
        );
    }

    public function afterSave()
    {
        parent::afterSave();
        $emp_id = $this->emp_id;
        $sql = 'UPDATE hr_employee e
SET e.amtOfStock = (SELECT SUM(CASE t.type when 2 then -1 else 1 end * amt) as sumAmt FROM hr_transaction t WHERE t.emp_id=:emp_id),
e.qtyOfStock = (SELECT SUM(CASE t.type when 2 then -1 else 1 end * qty) as sumQty FROM hr_transaction t WHERE t.emp_id=:emp_id),
e.rateOfStock = (SELECT amtEmp.sumAmt/(SELECT s.totalassets FROM hr_share s) * 100 FROM (SELECT SUM(CASE t.type when 2 then -1 else 1 end * amt) as sumAmt FROM hr_transaction t WHERE t.emp_id=:emp_id) as amtEmp)
WHERE e.id = :emp_id';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':emp_id', $emp_id);
        $command->execute();
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $emp_id = $this->emp_id;
        $sql = 'UPDATE hr_employee e
set e.amtOfStock = (SELECT SUM(CASE t.type when 2 then -1 else 1 end * amt) as sumAmt FROM hr_transaction t WHERE t.emp_id=:emp_id),
e.qtyOfStock = (SELECT SUM(CASE t.type when 2 then -1 else 1 end * qty) as sumQty FROM hr_transaction t WHERE t.emp_id=:emp_id),
e.rateOfStock = (SELECT amtEmp.sumAmt/(SELECT s.totalassets FROM hr_share s) * 100 FROM (SELECT SUM(CASE t.type when 2 then -1 else 1 end * amt) as sumAmt FROM hr_transaction t WHERE t.emp_id=:emp_id) as amtEmp)
WHERE e.id = :emp_id';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':emp_id', $emp_id);
        $command->execute();
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */

    public function getcodeLastName()
    {
        $result = Employee::model()->findAll('id=' . $this->emp_id);
        foreach ($result as $item) {
            $this->codeAndLastName = $item->code . '-' . $item->lastname;
        }
        $this->codeLastName = "$this->codeAndLastName";
    }

    protected function afterFind()
    {
        parent::afterFind();
        $this->getcodeLastName();
    }

    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('qty', $this->qty, true);
        $criteria->compare('amt', $this->amt, true);
        $criteria->compare('batch_id', $this->batch_id);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('type', $this->type);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getTotal($emp_id)
    {
        $total = 0;

        $provider = Transaction::model()->findAll('type=:type and emp_id=:emp_id', array(':type' => '2', ':emp_id' => $emp_id));
        foreach ($provider as $data) {
            $total += $data->amt;
        }
        return '<b>' . number_format($total, 0, ',', '.') . '</b>';
    }
}