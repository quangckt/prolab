<?php

/**
 * This is the model class for table "hr_seniority".
 *
 * The followings are the available columns in table 'hr_seniority':
 * @property integer $id
 * @property integer $emp_id
 * @property string $valueSeniority
 */
class Seniority extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Seniority the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_seniority';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('emp_id', 'numerical', 'integerOnly' => true),
            array('valueSeniority', 'length', 'max' => 19),
            array('year, type', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, emp_id, valueSeniority', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'emp_id' => 'Emp',
            'valueSeniority' => 'Value Seniority',
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
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('valueSeniority', $this->valueSeniority, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function accumulate() {
        return New CActiveDataProvider('Employee', array(
            'criteria' => array(
                'condition' => 't.status=0',
            ),
            'sort' => array(
                'defaultOrder' => array(
                    'shop_id' => 'false',
                    'department_id' => 'false',
                ),
            ),
            'pagination' => array(
                'pageSize' => '200',
            ),
        ));
    }

    public function searchAccumulate($valueOfMonth, $dateAccept) {
        $sql = 'SELECT e.id, e.code, e.lastname, s.name shopName, d.name depName, e.official_register_date,
                    CASE
                        WHEN (MONTH(e.official_register_date)=1 AND MONTH(:dateAccept)=12) THEN (YEAR(:dateAccept)-YEAR(e.official_register_date)+1)
                        WHEN (YEAR(:dateAccept)-YEAR(e.official_register_date))<0 THEN 0
                        ELSE (YEAR(:dateAccept)-YEAR(e.official_register_date))
                    END numberYear,
                    sen.valueSeniority,
                    COUNT(rd.id) shiftDay,
                    SUM(rd.dayWork) dayWork,
                    SUM(rd.dayWork)-COUNT(rd.id) resWan,
                    ROUND((SUM(rd.dayWork)-COUNT(rd.id))/COUNT(rd.id),2) rateResWan,
                    :valueOfMonth valueOfMonth,
                    sen.valueSeniority+:valueOfMonth sumValue
                FROM hr_employee e
                LEFT JOIN hr_report_detail rd ON rd.emp_id=e.id AND YEAR(rd.date)=YEAR(:dateAccept)
                INNER JOIN hr_shop s ON s.id=e.shop_id
                INNER JOIN hr_department d ON d.id=e.department_id
                INNER JOIN hr_seniority sen ON sen.emp_id=e.id
                WHERE e.status=0
                GROUP BY e.id';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':dateAccept', $dateAccept);
        $command->bindParam(':valueOfMonth', $valueOfMonth);
        $rawData = $command->queryAll();
        return New CArrayDataProvider($rawData, array(
            'sort' => array(
                'defaultOrder' => array(
                    'shopName' => 'false',
                    'depName' => 'false',
                ),
            ),
            'pagination' => array(
                'pageSize' => '200',
            ),
        ));
    }

    public function backPay($date) {
        $sql = 'SELECT e.id, e.code, e.lastname, s.name shopName, e.probationary_date, e.official_register_date,
                    CASE
                        WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<0 THEN "0 năm"
                        WHEN MONTH(e.official_register_date)=1 THEN CONCAT_WS(" ",YEAR(:date)-1-YEAR(e.official_register_date)+1,"năm")
                        ELSE CONCAT_WS(" ",YEAR(:date)-1-YEAR(e.official_register_date),"năm",MONTH(:date)+1-MONTH(e.official_register_date),"th")
                        END numberYearMonth,
                    CASE
                        WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<=0 THEN 0
                        WHEN (MONTH(:date)+1-MONTH(e.official_register_date))=12 THEN 0
                        ELSE (MONTH(:date)+1-MONTH(e.official_register_date))
                    END numberMonth,
                    senMonth.valueSeniority*(CASE 
                                            WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<=0 THEN 0
                                            WHEN (MONTH(:date)+1-MONTH(e.official_register_date))=12 THEN 0
                                            ELSE (MONTH(:date)+1-MONTH(e.official_register_date))
					END) valueBackPay
                FROM
                hr_employee e
                LEFT JOIN hr_seniority sen ON sen.emp_id=e.id AND sen.type=1
                INNER JOIN hr_shop s ON s.id=e.shop_id
                INNER JOIN hr_seniority senMonth ON senMonth.type=2 AND senMonth.year=YEAR(:date)
                WHERE e.status=0';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':date', $date);
        $rawData = $command->queryAll();
        return New CArrayDataProvider($rawData, array(
            'sort' => array(
                'defaultOrder' => array(
                    'shopName' => 'false',
                ),
            ),
            'pagination' => array(
                'pageSize' => '200',
            ),
        ));
    }
    public function severAllow($date) {
        $sql = 'SELECT e.id, e.code, e.lastname, s.name shopName, e.probationary_date, e.official_register_date,
                    CASE
                        WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<0 THEN "0 năm"
                        WHEN MONTH(e.official_register_date)=1 THEN CONCAT_WS(" ",YEAR(:date)-1-YEAR(e.official_register_date)+1,"năm")
                        ELSE CONCAT_WS(" ",YEAR(:date)-1-YEAR(e.official_register_date),"năm",MONTH(:date)+1-MONTH(e.official_register_date),"th")
                        END numberYearMonth,
                    CASE
                        WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<=0 THEN 0
                        WHEN (MONTH(:date)+1-MONTH(e.official_register_date))=12 THEN 0
                        ELSE (MONTH(:date)+1-MONTH(e.official_register_date))
                    END numberMonth,
                    senMonth.valueSeniority*(CASE 
                                            WHEN (YEAR(:date)-1-YEAR(e.official_register_date))<=0 THEN 0
                                            WHEN (MONTH(:date)+1-MONTH(e.official_register_date))=12 THEN 0
                                            ELSE (MONTH(:date)+1-MONTH(e.official_register_date))
					END) valueBackPay
                FROM
                hr_employee e
                LEFT JOIN hr_seniority sen ON sen.emp_id=e.id AND sen.type=1
                INNER JOIN hr_shop s ON s.id=e.shop_id
                INNER JOIN hr_seniority senMonth ON senMonth.type=2 AND senMonth.year=YEAR(:date)
                WHERE e.status=0';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':date', $date);
        $rawData = $command->queryAll();
        return New CArrayDataProvider($rawData, array(
            'sort' => array(
                'defaultOrder' => array(
                    'shopName' => 'false',
                ),
            ),
            'pagination' => array(
                'pageSize' => '200',
            ),
        ));
    }

}