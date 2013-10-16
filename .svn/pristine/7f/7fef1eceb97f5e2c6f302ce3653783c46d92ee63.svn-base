<?php

/**
 * This is the model class for table "hr_shift_detail".
 *
 * The followings are the available columns in table 'hr_shift_detail':
 * @property integer $id
 * @property integer $shift_id
 * @property string $date
 * @property integer $emp_id
 */
class ShiftDetail extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return HrShiftDetail the static model class
     */
    public $nameTime;
    public $plan_id;
    public $earlyTimeIn;
    public $lateTimeIn;
    public $lateTimeOut;
    public $earlyTimeOut;
    public $timeWork;
    public $dayWork;
    public $dayOff;
    public $fullDay;
    public $bonusFineTimeIn;
    public $bonusFineTimeOut;
    public $sumBonusFine;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_shift_detail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('shift_id, emp_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('status, note, date', 'safe'),
            array('timeIn, timeOut', 'type', 'type' => 'time', 'timeFormat' => 'hh:mm'),
            array('note, id, shift_id, date, emp_id,timeIn,timeOut,status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'shift' => array(self::BELONGS_TO, 'Shift', 'shift_id'),
            'emp' => array(self::BELONGS_TO, 'Employee', 'emp_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'shift_id' => 'Shift',
            'date' => 'Date',
            'emp_id' => 'Emp',
            'timeIn' => 'Giờ đến TT',
            'timeOut' => 'Giờ về TT',
            'status' => 'Status',
            'note' => 'Lý do điều chỉnh'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function getNameTime() {
        return $this->nameTime = $this->date . ' - ' . $this->shift->name . ' - ' . $this->shift->starttime . '=>' . $this->shift->endtime;
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

    protected function afterFind() {
        parent::afterFind();
        $this->getNameTime();
        $this->getFullDay();
        $this->lateEarlyTime();
    }

    public function lateEarlyTime() {
        $earlyTimeIn = null;
        $lateTimeIn = null;
        $earlyTimeOut = null;
        $lateTimeOut = null;

        $startTime = $this->shift->starttime;
        $listStart = explode(':', $startTime);
        $startTimeToSec = (int) $listStart['0'] * 3600 + (int) $listStart['1'] * 60;
        $startTimeToMinutes = (int) $listStart['0'] * 60 + (int) $listStart['1'];
        $endTime = $this->shift->endtime;
        $listEnd = explode(':', $endTime);
        $endTimeToSec = (int) $listEnd['0'] * 3600 + (int) $listEnd['1'] * 60;
        $endTimeToMinutes = (int) $listEnd['0'] * 60 + (int) $listEnd['1'];
        if (!empty($this->timeIn) && !empty($this->timeOut)) {
            $listTimeIn = explode(':', $this->timeIn);
            $TimeInToSec = (int) $listTimeIn['0'] * 3600 + (int) $listTimeIn['1'] * 60;
            $TimeInToMinutes = (int) $listTimeIn['0'] * 60 + (int) $listTimeIn['1'];
            $listTimeOut = explode(':', $this->timeOut);
            $TimeOutToSec = (int) $listTimeOut['0'] * 3600 + (int) $listTimeOut['1'] * 60;
            $TimeOutToMinutes = (int) $listTimeOut['0'] * 60 + (int) $listTimeOut['1'];
            if ($TimeInToSec < $startTimeToSec) {
                $this->earlyTimeIn = gmdate('H:i', $startTimeToSec - $TimeInToSec);
                $earlyTimeIn = $startTimeToMinutes - $TimeInToMinutes;
            }
            if ($TimeInToSec > $startTimeToSec) {
                $this->earlyTimeIn = '-' . gmdate('H:i', $TimeInToSec - $startTimeToSec);
                $lateTimeIn = $TimeInToMinutes - $startTimeToMinutes;
            }
            if ($TimeOutToSec < $endTimeToSec) {
                $this->earlyTimeOut = gmdate('H:i', $endTimeToSec - $TimeOutToSec);
                $earlyTimeOut = $endTimeToMinutes - $TimeOutToMinutes;
            }
            if ($TimeOutToSec > $endTimeToSec) {
                $this->earlyTimeOut = '-' . gmdate('H:i', $TimeOutToSec - $endTimeToSec);
                $lateTimeOut = $TimeOutToMinutes - $endTimeToMinutes;
            }
            $this->timeWork = gmdate('H:i', $TimeOutToSec - $TimeInToSec);
            $timeWork = $TimeOutToSec - $TimeInToSec;
            $timePlan = $endTimeToSec - $startTimeToSec;

            $monthYear = date('m-Y', strtotime($this->date));
            if ($this->type == 1)
                $this->dayWork = 0;
            else {
                $dayRule = Payrollrule::model()->findAll('type=1 and monthYear=:monthYear', array(':monthYear' => $monthYear));
                if (empty($dayRule))
                    $this->dayWork = Yii::t(
                                    'rules', 'Tháng này chưa có qui định, <a href="{url}">Thêm qui định</a>', array('{url}' => Yii::app()->createUrl('hr/payrollrule/index'))
                    );
                else {
                    $day = null;
                    foreach ($dayRule as $item) {
                        $timePlanNew = $timePlan * (int) $item->rate / 100;
                        if ($timeWork >= $timePlanNew) {
                            $this->dayWork = $item->val;
                            $day = '1';
                        } else {
                            if (empty($day))
                                $this->dayWork = 0;
                        }
                    }
                }
            }

            $bonusFineTimeInEarly = Payrollrule::model()->findAll('type=2 and monthYear=:monthYear', array(':monthYear' => $monthYear));
            $bonusFineTimeInLate = Payrollrule::model()->findAll('type=3 and monthYear=:monthYear', array(':monthYear' => $monthYear));
            $bonusFineTimeOutEarly = Payrollrule::model()->findAll('type=4 and monthYear=:monthYear order by rate desc', array(':monthYear' => $monthYear));
            $bonusFineTimeOutLate = Payrollrule::model()->findAll('type=5 and monthYear=:monthYear', array(':monthYear' => $monthYear));
            if (empty($bonusFineTimeInEarly) || empty($bonusFineTimeInLate) || empty($bonusFineTimeOutEarly) || empty($bonusFineTimeOutLate))
                $this->bonusFineTimeIn = $this->bonusFineTimeOut = $this->sumBonusFine = Yii::t(
                                'bonus', 'Tháng này chưa có qui định, <a href="{url}">Thêm qui định</a>', array('{url}' => Yii::app()->createUrl('hr/payrollrule/index'))
                );
            else {
                foreach ($bonusFineTimeInEarly as $item) {
                    if ($earlyTimeIn >= $item->val)
                        $this->bonusFineTimeIn = $item->rate;
                }
                foreach ($bonusFineTimeInLate as $item) {
                    if ($lateTimeIn >= $item->val)
                        $this->bonusFineTimeIn = $item->rate;
                }
                foreach ($bonusFineTimeOutEarly as $item) {
                    if ($earlyTimeOut >= $item->val)
                        $this->bonusFineTimeOut = $item->rate;
                }
                foreach ($bonusFineTimeOutLate as $item) {
                    if ($lateTimeOut >= $item->val)
                        $this->bonusFineTimeOut = $item->rate;
                }
                $this->sumBonusFine = (empty($this->bonusFineTimeIn) && empty($this->bonusFineTimeOut)) ? null : ($this->bonusFineTimeIn + $this->bonusFineTimeOut);
            }
        }
    }

    public function search($bool) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
        $criteria = new CDbCriteria;
        if ($bool) {
            $criteria->compare('t.status', 10);
        } else {
            $criteria->compare('id', $this->id);
            $criteria->compare('shift_id', $this->shift_id);
            $criteria->compare('emp_id', $this->emp_id);
            if (isset($this->status))
                $criteria->compare('t.status', $this->status);
            if (isset($this->plan_id))
                $criteria->with = array('shift');
            $criteria->compare('shift.shift_plan_id', $this->plan_id);
            if (isset($this->date))
                $criteria->compare('date', $this->date, true);
        }

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

    public function getCssClass($data) {
        //$cssClass = null;
        if ($data->fullDay == 'CN')
            return $cssClass = 'rSunday';
        //return $cssClass;
    }

}