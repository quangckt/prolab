<?php

/**
 * This is the model class for table "hr_report_detail".
 *
 * The followings are the available columns in table 'hr_report_detail':
 * @property integer $id
 * @property string $date
 * @property integer $emp_id
 * @property integer $shift_id
 * @property string $startTime
 * @property string $endTime
 * @property string $timeIn
 * @property string $timeOut
 * @property string $earlyTimeIn
 * @property string $lateTimeIn
 * @property string $earlyTimeOut
 * @property string $lateTimeOut
 * @property string $timeWork
 * @property string $dayWork
 * @property string $dayOffNotAllowed
 * @property string $rateBonusTimeIn
 * @property string $rateBonusTimeOut
 * @property string $sumRateBonus
 * @property string $valueBonusTimeIn
 * @property string $valueBonusTimeOut
 * @property string $sumValueBonus
 * @property string $dateBonus
 * @property string $bonusDayAllowed
 * @property string $typeRespon
 * @property string $bonusRespon
 * @property string $typeOutStan
 * @property string $bonusOutStan
 * @property string $sumAllBonus
 * @property integer $plan_id
 */
class ReportDetail extends BaseModel {

    public $fullDay;
    public $earlyLateTimeIn;
    public $earlyLateTimeOut;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ReportDetail the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_report_detail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id', 'required'),
            array('id, emp_id, shift_id, plan_id', 'numerical', 'integerOnly' => true),
            array('dayWork, dayOffNotAllowed, rateBonusTimeIn, rateBonusTimeOut, sumRateBonus, valueBonusTimeIn, valueBonusTimeOut, sumValueBonus, dateBonus, bonusDayAllowed, bonusRespon, bonusOutstan, sumAllBonus', 'length', 'max' => 19),
            array('typeRespon, typeOutStan', 'length', 'max' => 25),
            array('date, startTime, endTime, timeIn, timeOut, earlyTimeIn, lateTimeIn, earlyTimeOut, lateTimeOut, timeWork, dayWorkOfValue, valueBonusStan', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, emp_id, shift_id, startTime, endTime, timeIn, timeOut, earlyTimeIn, lateTimeIn, earlyTimeOut, lateTimeOut, timeWork, dayWork, dayOffNotAllowed, rateBonusTimeIn, rateBonusTimeOut, sumRateBonus, valueBonusTimeIn, valueBonusTimeOut, sumValueBonus, dateBonus, bonusDayAllowed, typeRespon, bonusRespon, typeOutStan, bonusOutStan, sumAllBonus, plan_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'employee' => array(self::BELONGS_TO, 'Employee', 'emp_id'),
            'shift' => array(self::BELONGS_TO, 'Shift', 'shift_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'date' => 'Date',
            'emp_id' => 'Emp',
            'shift_id' => 'Shift',
            'startTime' => 'Start Time',
            'endTime' => 'End Time',
            'timeIn' => 'Time In',
            'timeOut' => 'Time Out',
            'earlyTimeIn' => 'Early Time In',
            'lateTimeIn' => 'Late Time In',
            'earlyTimeOut' => 'Early Time Out',
            'lateTimeOut' => 'Late Time Out',
            'timeWork' => 'Time Work',
            'dayWork' => 'Day Work',
            'dayOffNotAllowed' => 'Day Off Not Allowed',
            'rateBonusTimeIn' => 'Rate Bonus Time In',
            'rateBonusTimeOut' => 'Rate Bonus Time Out',
            'sumRateBonus' => 'Sum Rate Bonus',
            'valueBonusTimeIn' => 'Value Bonus Time In',
            'valueBonusTimeOut' => 'Value Bonus Time Out',
            'sumValueBonus' => 'Sum Value Bonus',
            'dateBonus' => 'Date Bonus',
            'bonusDayAllowed' => 'Bonus Day Allowed',
            'typeRespon' => 'Type Respon',
            'bonusRespon' => 'Bonus Respon',
            'typeOutStan' => 'Type Out Stan',
            'bonusOutStan' => 'Bonus Outstan',
            'sumAllBonus' => 'Sum All Bonus',
            'plan_id' => 'Plan',
        );
    }

    public function getFullDay() {
        $day = array(
            '0' => 'CN',
            '1' => 'Thứ hai',
            '2' => 'Thứ ba',
            '3' => 'Thứ tư',
            '4' => 'Thứ năm',
            '5' => 'Thứ sáu',
            '6' => 'Thứ bảy',
        );
        return $this->fullDay = trim($day[date('w', strtotime($this->date))]);
    }

    public function runAll() {
        $this->getEarlyLateTimeIn();
        $this->getEarlyLateTimeOut();
    }

    public function getEarlyLateTimeIn() {
        $this->earlyLateTimeIn = (empty($this->earlyTimeIn) && empty($this->lateTimeIn)) ? NULL : (empty($this->earlyTimeIn) ? '-' . $this->lateTimeIn : $this->earlyTimeIn);
    }

    public function getEarlyLateTimeOut() {
        $this->earlyLateTimeOut = (empty($this->earlyTimeOut) && empty($this->lateTimeOut)) ? NULL : (empty($this->earlyTimeOut) ? '-' . $this->lateTimeOut : $this->earlyTimeOut);
    }

    public function afterFind() {
        parent::afterFind();
        $this->getFullDay();
        $this->runAll();
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
        $criteria->compare('date', $this->date, true);
        $criteria->compare('emp_id', $this->emp_id);
        $criteria->compare('shift_id', $this->shift_id);
        $criteria->compare('startTime', $this->startTime, true);
        $criteria->compare('endTime', $this->endTime, true);
        $criteria->compare('timeIn', $this->timeIn, true);
        $criteria->compare('timeOut', $this->timeOut, true);
        $criteria->compare('earlyTimeIn', $this->earlyTimeIn, true);
        $criteria->compare('lateTimeIn', $this->lateTimeIn, true);
        $criteria->compare('earlyTimeOut', $this->earlyTimeOut, true);
        $criteria->compare('lateTimeOut', $this->lateTimeOut, true);
        $criteria->compare('timeWork', $this->timeWork, true);
        $criteria->compare('dayWork', $this->dayWork, true);
        $criteria->compare('dayOffNotAllowed', $this->dayOffNotAllowed, true);
        $criteria->compare('rateBonusTimeIn', $this->rateBonusTimeIn, true);
        $criteria->compare('rateBonusTimeOut', $this->rateBonusTimeOut, true);
        $criteria->compare('sumRateBonus', $this->sumRateBonus, true);
        $criteria->compare('valueBonusTimeIn', $this->valueBonusTimeIn, true);
        $criteria->compare('valueBonusTimeOut', $this->valueBonusTimeOut, true);
        $criteria->compare('sumValueBonus', $this->sumValueBonus, true);
        $criteria->compare('dateBonus', $this->dateBonus, true);
        $criteria->compare('bonusDayAllowed', $this->bonusDayAllowed, true);
        $criteria->compare('typeRespon', $this->typeRespon, true);
        $criteria->compare('bonusRespon', $this->bonusRespon, true);
        $criteria->compare('typeOutStan', $this->typeOutStan, true);
        $criteria->compare('bonusOutStan', $this->bonusOutStan, true);
        $criteria->compare('sumAllBonus', $this->sumAllBonus, true);
        $criteria->compare('plan_id', $this->plan_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'emp_id' => false,
                            'date' => false,
                        )
                    ),
                    'pagination' => array(
                        'pageSize' => 50,
                    ),
                ));
    }

    public function sumReportByType($plan_id, $type) {
        $sumTimeWork = NULL;
        if ($type == 'timeWork') {
            $sumTimeWork = Yii::app()->db->createCommand()
                    ->select('rd.id, e.code, e.lastname, s.name shopName, d.name depName,
                        COUNT(rd.id) shiftDay,
                        SEC_TO_TIME(SUM((TIME_TO_SEC(rd.endTime) - TIME_TO_SEC(rd.startTime)))) timeShift,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.earlyTimeIn))) earlyTimeIn,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.lateTimeIn))) lateTimeIn,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.earlyTimeOut))) earlyTimeOut,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.lateTimeOut))) lateTimeOut,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.timeWork))) timeWork,
                        SUM(rd.dayWork) dayWork,
                        SUM(rd.dayOffNotAllowed) dayOffNotAllowed')
                    ->from('hr_report_detail rd')
                    ->join('hr_employee e', 'e.id=rd.emp_id')
                    ->join('hr_shop s', 's.id=e.shop_id')
                    ->join('hr_department d', 'd.id=e.department_id')
                    ->where('rd.plan_id=:plan_id', array(':plan_id' => $plan_id))
                    ->group('rd.emp_id')
                    ->queryAll();
        } elseif ($type == 'bonusPT') {
            $sumTimeWork = Yii::app()->db->createCommand()
                    ->select('rd.id, e.code, e.lastname, s.name shopName, d.name depName,
                        COUNT(rd.id) shiftDay,
                        SEC_TO_TIME(SUM((TIME_TO_SEC(rd.endTime) - TIME_TO_SEC(rd.startTime)))) timeShift,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.earlyTimeIn))) earlyTimeIn,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.lateTimeIn))) lateTimeIn,
                        SUM(rd.rateBonusTimeIn) rateBonusTimeIn,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.earlyTimeOut))) earlyTimeOut,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.lateTimeOut))) lateTimeOut,
                        SUM(rd.rateBonusTimeOut) rateBonusTimeOut,
                        SEC_TO_TIME(SUM(TIME_TO_SEC(rd.timeWork))) timeWork,
                        CASE
                            WHEN (SUM(TIME_TO_SEC(rd.timeWork)) > SUM((TIME_TO_SEC(rd.endTime) - TIME_TO_SEC(rd.startTime)))) THEN "Dư"
                            ELSE "Thiếu"
                        END owResi,
                        (SUM(rd.rateBonusTimeIn) + SUM(rd.rateBonusTimeOut)) sumRateBonus')
                    ->from('hr_report_detail rd')
                    ->join('hr_employee e', 'e.id=rd.emp_id')
                    ->join('hr_shop s', 's.id=e.shop_id')
                    ->join('hr_department d', 'd.id=e.department_id')
                    ->where('rd.plan_id=:plan_id', array(':plan_id' => $plan_id))
                    ->group('rd.emp_id')
                    ->queryAll();
        } elseif ($type == 'bonusValue') {
            $sumTimeWork = Yii::app()->db->createCommand()
                    ->select('rd.id, e.code, e.lastname, s.name shopName, d.name depName,
                        SUM(rd.valueBonusStan) valueBonusStan,
                        SUM(rd.rateBonusTimeIn) rateBonusTimeIn,
                        SUM(rd.valueBonusTimeIn) valueBonusTimeIn,
                        SUM(rd.rateBonusTimeOut) rateBonusTimeOut,
                        SUM(rd.valueBonusTimeOut) valueBonusTimeOut,
                        SUM(rd.sumValueBonus) sumValueBonus,
                        SUM(rd.dayOffNotAllowed) dayOffNotAllowed,
                        SUM(rd.dateBonus) dateBonus,
                        SUM(rd.bonusDayAllowed) bonusDayAllowed,
                        SUM(rd.bonusRespon) bonusRespon,
                        SUM(rd.bonusOutStan) bonusOutStan,
                        SUM(rd.sumAllBonus) sumAllBonus')
                    ->from('hr_report_detail rd')
                    ->join('hr_employee e', 'e.id=rd.emp_id')
                    ->join('hr_shop s', 's.id=e.shop_id')
                    ->join('hr_department d', 'd.id=e.department_id')
                    ->where('rd.plan_id=:plan_id', array(':plan_id' => $plan_id))
                    ->group('rd.emp_id')
                    ->queryAll();
        }
        return new CArrayDataProvider($sumTimeWork, array(
                    'id' => $type,
                    'pagination' => array(
                        'pageSize' => 30,
                    ),
                ));
    }

    public function getCssClass($data) {
        //$cssClass = null;
        if ($data->fullDay == 'CN')
            return $cssClass = 'rSunday';
        //return $cssClass;
    }

}