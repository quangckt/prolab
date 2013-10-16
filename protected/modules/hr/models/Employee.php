<?php

/**
 * This is the model class for table "hr_employee".
 *
 * The followings are the available columns in table 'hr_employee':
 * @property integer $id
 * @property string $code
 * @property string $number
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $birthday
 * @property string $plate_of_birth
 * @property string $home_phone
 * @property string $mobile_phone
 * @property integer $sex
 * @property string $email
 * @property integer $identification
 * @property string $identification_plate
 * @property string $identification_date
 * @property string $image
 * @property string $probationary_date
 * @property string $official_register_date
 * @property string $address
 * @property string $address_tmp
 * @property integer $district
 * @property integer $district_tmp
 * @property integer $city
 * @property integer $city_tmp
 * @property integer $type
 * @property integer $shop_id
 * @property integer $job_id
 * @property string $description
 * @property integer $cumulative
 * @property integer $department_id
 *
 * The followings are the available model relations:
 * @property HrEducation[] $hrEducations
 * @property HrExperience[] $hrExperiences
 * @property HrOrganization[] $hrOrganizations
 * @property HrRelation[] $hrRelations
 */
class Employee extends BaseModel {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Employee the static model class
     */
    public $workDay;
    public $shift;
    public $startTimeShift;
    public $endTimeShift;
    public $fullName;
    public $codeFullName;
    public $codeLastName;
    public $sumTimeOfShift;
    public $sumTimeOfTR;
    public $rateOfTrAndShift;
    public $sumAllowDayOf;
    public $sumUnAllowDayOf;
    public $montYear;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hr_employee';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('type,status,department_id,shop_id,job_id,code, firstname, middlename, lastname, birthday, plate_of_birth, mobile_phone, sex,  identification_plate, identification_date, levelofedu_id, field_edu', 'required'),
            array('sex, district_id, district_tmp_id, department_id, city_id, city_tmp_id, type, job_id, shop_id, cumulative', 'numerical', 'integerOnly' => true),
            array('code', 'length', 'max' => 11),
            array('code', 'unique',),
            array('number, firstname, middlename, lastname, plate_of_birth, image,  address, address_tmp,identification', 'length', 'max' => 255),
            array('home_phone, mobile_phone', 'length', 'max' => 15),
            array('email, identification_plate', 'length', 'max' => 50),
            array('probationary_date, official_register_date,birthday', 'safe'),
            array('probationary_date, official_register_date,identification_date,birthday', 'date', 'format' => 'd-M-yyyy'),
            array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('image', 'length', 'max' => 255, 'on' => 'insert,update'),
            array('email', 'email'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code, number, firstname, middlename, lastname, birthday, plate_of_birth, home_phone, mobile_phone, sex, email, identification, identification_plate, identification_date, image, probationary_date, official_register_date, address, address_tmp, district_id, district_tmp_id, city, city_tmp_id, type, description,status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'empRelations' => array(self::HAS_MANY, 'EmpRelation', 'emp_id'),
            'historys' => array(self::HAS_MANY, 'History', 'emp_id'),
            'educations' => array(self::HAS_MANY, 'Education', 'emp_id'),
            'shop' => array(self::BELONGS_TO, 'Shop', 'shop_id'),
            'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
            'job' => array(self::BELONGS_TO, 'Job', 'job_id'),
            'district' => array(self::BELONGS_TO, 'District', 'district_id'),
            'city' => array(self::BELONGS_TO, 'City', 'city_id'),
            'levelofedu' => array(self::BELONGS_TO, 'Levelofedu', 'levelofedu_id'),
            'amtCurrentStock' => array(self::STAT, 'Transaction', 'emp_id', 'select' => 'sum(amt)'),
            'grade' => array(self::HAS_MANY, 'Grade', 'emp_id'),
            'seniority' => array(self::HAS_MANY, 'Seniority', 'emp_id', 'joinType' => 'LEFT JOIN', 'condition' => 'type=1'),
            'senioritySeverAllow' => array(self::HAS_MANY, 'Seniority', 'emp_id', 'joinType' => 'LEFT JOIN', 'condition' => 'type=0'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code' => 'Mã Nhân Viên',
            'number' => 'Number',
            'firstname' => 'H?',
            'middlename' => 'Tên Ð?m',
            'lastname' => 'Tên',
            'birthday' => 'Ngày Sinh',
            'plate_of_birth' => 'Noi Sinh',
            'home_phone' => 'Máy Bàn',
            'mobile_phone' => 'Di Ð?ng',
            'sex' => 'Gi?i Tính',
            'email' => 'Email',
            'identification' => 'CMND S?',
            'identification_plate' => '<br />Noi C?p',
            'identification_date' => 'Ngày C?p',
            'image' => 'Hình',
            'probationary_date' => 'Ngày Th? Vi?c',
            'official_register_date' => 'Ngày Làm Chính Th?c',
            'address' => 'Ð?a Ch? Thu?ng Trú',
            'address_tmp' => 'Ð?a Ch? T?m Trú',
            'district_id' => 'Qu?n',
            'district_tmp_id' => 'Huy?n',
            'city_id' => 'Thành Ph?',
            'city_tmp_id' => 'T?nh',
            'type' => 'Lao Ð?ng',
            'shop_id' => 'Cửa Hàng',
            'job_id' => 'Vị Trí',
            'description' => 'Nhận Xét',
            'cumulative' => 'Lũy Kế'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function getFullName() {
        $this->fullName = "$this->firstname $this->middlename $this->lastname";
    }

    public function getWorkDay() {
        $test = array(
            '0' => 'Chủ nhật',
            '1' => 'Thứ hai',
            '2' => 'Thứ ba',
            '3' => 'Thứ tư',
            '4' => 'Thứ năm',
            '5' => 'Thứ sáu',
            '6' => 'Thứ bảy',
        );
        $this->workDay = date('d-m-Y') . " (" . $test[date('w')] . ")";
    }

    public function getShift() {
        $shiftDetail = ShiftDetail::model()->find('date=:date and emp_id=:emp_id', array(':date' => date('Y-m-d'), ':emp_id' => $this->id));
        $this->shift = empty($shiftDetail) ? 'Hôm nay bạn không có ca !!!' : $shiftDetail->shift->code . ' (' . $shiftDetail->shift->name . ' )';
    }

    public function getStartTimeShift() {
        $shiftDetail = ShiftDetail::model()->find('date=:date and emp_id=:emp_id', array(':date' => date('Y-m-d'), ':emp_id' => $this->id));
        $this->startTimeShift = empty($shiftDetail) ? 'Hôm nay bạn không có ca !!!' : $shiftDetail->shift->starttime;
    }

    public function getEndTimeShift() {
        $shiftDetail = ShiftDetail::model()->find('date=:date and emp_id=:emp_id', array(':date' => date('Y-m-d'), ':emp_id' => $this->id));
        $this->endTimeShift = empty($shiftDetail) ? 'Hôm nay bạn không có ca !!!' : $shiftDetail->shift->endtime;
    }

    public function getcodeFullName() {
        $this->codeFullName = "$this->code-$this->fullName";
    }

    public function getcodeLastName() {
        $this->codeLastName = "$this->code-$this->lastname";
    }

    protected function afterFind() {
        parent::afterFind();
        $this->getFullName();
        $this->getcodeFullName();
        $this->getcodeLastName();
        $this->getWorkDay();
        $this->getShift();
        $this->getStartTimeShift();
        $this->getendTimeShift();
    }

    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('number', $this->number, true);
        $criteria->compare('firstname', $this->firstname, true);
        $criteria->compare('middlename', $this->middlename, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('birthday', $this->birthday, true);
        $criteria->compare('plate_of_birth', $this->plate_of_birth, true);
        $criteria->compare('home_phone', $this->home_phone, true);
        $criteria->compare('mobile_phone', $this->mobile_phone, true);
        $criteria->compare('sex', $this->sex);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('identification', $this->identification);
        $criteria->compare('identification_plate', $this->identification_plate, true);
        $criteria->compare('identification_date', $this->identification_date, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('probationary_date', $this->probationary_date, true);
        $criteria->compare('official_register_date', $this->official_register_date, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('address_tmp', $this->address_tmp, true);
        $criteria->compare('district_id', $this->district_id);
        $criteria->compare('district_tmp_id', $this->district_tmp_id);
        $criteria->compare('city_id', $this->city_id);
        $criteria->compare('city_tmp_id', $this->city_tmp_id);
        $criteria->compare('type', $this->type);
        $criteria->compare('shop_id', $this->shop_id);
        $criteria->compare('job_id', $this->job_id);
        $criteria->compare('description', $this->description);
        $criteria->compare('cumulative', $this->cumulative);
        $criteria->compare('department_id', $this->department_id);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchGrade($bool) {
        $criteria = new CDbCriteria;
        if ($bool) {
            $criteria->compare('status', 10);
        } else {
            $criteria->compare('id', $this->id);
            $criteria->compare('code', $this->code, true);
            $criteria->compare('number', $this->number, true);
            $criteria->compare('firstname', $this->firstname, true);
            $criteria->compare('middlename', $this->middlename, true);
            $criteria->compare('lastname', $this->lastname, true);
            $criteria->compare('birthday', $this->birthday, true);
            $criteria->compare('plate_of_birth', $this->plate_of_birth, true);
            $criteria->compare('home_phone', $this->home_phone, true);
            $criteria->compare('mobile_phone', $this->mobile_phone, true);
            $criteria->compare('sex', $this->sex);
            $criteria->compare('email', $this->email, true);
            $criteria->compare('identification', $this->identification);
            $criteria->compare('identification_plate', $this->identification_plate, true);
            $criteria->compare('identification_date', $this->identification_date, true);
            $criteria->compare('image', $this->image, true);
            $criteria->compare('probationary_date', $this->probationary_date, true);
            $criteria->compare('official_register_date', $this->official_register_date, true);
            $criteria->compare('address', $this->address, true);
            $criteria->compare('address_tmp', $this->address_tmp, true);
            $criteria->compare('district_id', $this->district_id);
            $criteria->compare('district_tmp_id', $this->district_tmp_id);
            $criteria->compare('city_id', $this->city_id);
            $criteria->compare('city_tmp_id', $this->city_tmp_id);
            $criteria->compare('type', $this->type);
            $criteria->compare('shop_id', $this->shop_id);
            $criteria->compare('job_id', $this->job_id);
            $criteria->compare('description', $this->description);
            $criteria->compare('cumulative', $this->cumulative);
            $criteria->compare('department_id', $this->department_id);
            $criteria->compare('status', $this->status);
        }

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'keys' => array(
                'monthYear' => $this->montYear,
            ),
        ));
    }

    public function getImageForProfile() {
        $imageName = ($this->image != null) ? $this->image : 'User.png';
        $img = CHtml::image(Yii::app()->baseUrl . "/images/$imageName", 'image', array('style' =>
                    'width:100px;'));
        //return CHtml::link($img, array('update', 'id' => $this->id));
        return $img;
    }

}