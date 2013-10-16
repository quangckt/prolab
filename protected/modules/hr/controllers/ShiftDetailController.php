<?php

class ShiftDetailController extends BaseController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    public function actionGetItems() {
        $sql = 'SELECT id, name as value FROM hr_shift_detail WHERE name LIKE :qterm ORDER BY name ASC';
        $command = Yii::app()->db->createCommand($sql);
        $qterm = $_GET['term'] . '%';
        $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
        $result = $command->queryAll();
        echo CJSON::encode($result);
        exit;
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new HrShiftDetail;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ShiftDetail'])) {
            $model->attributes = $_POST['ShiftDetail'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        if (isset($_GET['id'])) {
            $detailId = $_GET['id'];
            $model = $this->loadModel($_GET['id']);
            $dept = $model->emp->department_id;
            $plan = $model->shift->shift_plan_id;
            $shiftPlan = ShiftPlan::model()->findByPk($plan);
        }
        if (isset($_POST['ShiftDetail'])) {
            if ($shiftPlan->status != 0) {
                $model->addError('emp_id', 'Chu kỳ làm việc này đã khóa, không thể thay đổi !');
                $this->render('info', array(
                    'model' => $model,
                    'dept' => $dept,
                    'plan' => $plan,
                ));
                exit;
            }
            if ($_POST['ShiftDetail']['mode'] == 'del') {
                $model->delete();
                $model = null;
                //echo CJSON::encode(array('mode'=>$_POST['ShiftDetail']['mode'],'id'=>$detailId));
                exit;
            }
            if ($_POST['ShiftDetail']['mode'] == 'save') {
                $date = strtotime($_POST['ShiftDetail']['date']);
                $day = date('y-m-d', $date);
                if ($date <= strtotime($shiftPlan->enddate) && $date >= strtotime($shiftPlan->startdate)) {
                    $detail = ShiftDetail::model()->findBySql('select * from hr_shift_detail WHERE ischanged=0 and emp_id =:emp_id and date =:date and id!=:id', array(':emp_id' => $_POST['ShiftDetail']['emp_id'], ':date' => $day, ':id' => $detailId));
                    if ($detail == null) {
                        $model->emp_id = $_POST['ShiftDetail']['emp_id'];
                        $model->shift_id = $_POST['ShiftDetail']['shift_id'];
                        $model->date = $_POST['ShiftDetail']['date'];
                        if ($_POST['ShiftDetail']['date_correct'] != '' and $_POST['ShiftDetail']['from_correct'] != '' and $_POST['ShiftDetail']['to_correct'] != '') {
                            $model->date_correct = $_POST['ShiftDetail']['date_correct'];
                            $model->from_correct = $_POST['ShiftDetail']['from_correct'];
                            $model->to_correct = $_POST['ShiftDetail']['to_correct'];
                            $model->status_correct = 1;
                            $model->note = $_POST['ShiftDetail']['note'];
                            $model->user_correct = $model->getCreateName();
                        }
                        $model->save(false);
                        exit;
                    } else {
                        $model->addError('date', 'Nhân viên đã có ca làm việc !');
                    }
                } else {
                    $model->addError('date', 'Ngày trực không nằm trong chu kỳ !');
                }
                //echo CJSON::encode(array('mode'=>1,'id'=>$detailId));
            }
        }
        $this->render('info', array(
            'model' => $model,
            'dept' => $dept,
            'plan' => $plan,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $listEventShift = array();
        if (isset($_GET['plan_id'])) {
            $sql = "SELECT s.`name`,s.starttime,e.code,s.endtime,e.lastname,d.date,d.id,s.colorEvent
                 FROM hr_shift s
                 INNER JOIN hr_shift_detail d ON s.id = d.shift_id
                 INNER JOIN hr_employee e ON e.id = d.emp_id
                 where s.shift_plan_id=:plan_id  ";
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":plan_id", $_GET['plan_id'], PDO::PARAM_STR);
            $result = $command->queryAll();
            foreach ($result as $k => $i) {

                $listEventShift[] = array(
                    'id' => $i['id'],
                    'title' => $i['name'] . ':' . substr($i['starttime'], 0, -3) . '=>' . substr($i['endtime'], 0, -3),
                    'description' => $i['code'] . " | " . $i['lastname'],
                    'start' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['starttime'])),
                    'end' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['endtime'])),
                    'allDay' => false,
                    'className' => array(0 => $i['id']),
                    'color' => ($i['colorEvent'] != null) ? $i['colorEvent'] : "",
                );
            }
            $this->render('index', array(
                'listEventShift' => $listEventShift,
                'plan_id' => $_GET['plan_id']
            ));
        }
    }

    public function actionMyShiftDetail() {
        $listEventShift = array();
        $user = User::model()->find('id=:id', array(':id' => Yii::app()->user->id));
        $emp_id = $user->emp_id;
        $emp = Employee::model()->find('id=:emp_id', array(':emp_id' => $emp_id));
        $department_id = $emp->department_id;
        $month = date('m');
        $shiftPlan = ShiftPlan::model()->find('status = 0 and department_id=:dep_id and MONTH(startdate) = :month', array(':dep_id' => $department_id, ':month' => $month));
        if (isset($shiftPlan)) {
            $plan_id = $shiftPlan->id;
            $sql = "SELECT s.name,s.starttime,e.code,s.endtime,e.lastname,d.date,d.id,s.colorEvent
                 FROM hr_shift s
                 INNER JOIN hr_shift_detail d ON s.id = d.shift_id and d.emp_id=:emp_id
                 INNER JOIN hr_employee e ON e.id = d.emp_id
                 where s.shift_plan_id=:plan_id  ";
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":plan_id", $plan_id, PDO::PARAM_STR);
            $command->bindParam(":emp_id", $emp_id, PDO::PARAM_STR);
            $result = $command->queryAll();
            foreach ($result as $k => $i) {

                $listEventShift[] = array(
                    'id' => $i['id'],
                    'title' => $i['name'] . ':' . substr($i['starttime'], 0, -3) . '=>' . substr($i['endtime'], 0, -3),
                    'description' => $i['code'] . " | " . $i['lastname'],
                    'start' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['starttime'])),
                    'end' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['endtime'])),
                    'allDay' => false,
                    'className' => array(0 => $i['id']),
                    'color' => ($i['colorEvent'] != null) ? $i['colorEvent'] : "",
                );
            }
        }
        $this->render('myShiftDetail', array(
            'listEventShift' => $listEventShift,
            'plan_id' => isset($plan_id) ? $plan_id : null,
        ));
    }

    /**
     * Lists all models.
     */
    public function actionDetail() {
        $listEventShift = array();
        if (isset($_GET['plan_id'])) {
            $sql = "SELECT s.`name`,s.starttime,e.code,s.endtime,e.lastname,d.date,d.id,s.colorEvent
                 FROM hr_shift s
                 INNER JOIN hr_shift_detail d ON s.id = d.shift_id
                 INNER JOIN hr_employee e ON e.id = d.emp_id
                 where s.shift_plan_id=:plan_id  ";
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":plan_id", $_GET['plan_id'], PDO::PARAM_STR);
            $result = $command->queryAll();
            foreach ($result as $k => $i) {

                $listEventShift[] = array(
                    'id' => $i['id'],
                    'title' => $i['name'] . ':' . substr($i['starttime'], 0, -3) . '=>' . substr($i['endtime'], 0, -3),
                    'description' => $i['code'] . " | " . $i['lastname'],
                    'start' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['starttime'])),
                    'end' => date('Y-m-d H:i', strtotime($i['date'] . " " . $i['endtime'])),
                    'allDay' => false,
                    'className' => array(0 => $i['id']),
                    'color' => ($i['colorEvent'] != null) ? $i['colorEvent'] : "",
                );
            }
            $this->render('index', array(
                'listEventShift' => $listEventShift,
                'plan_id' => $_GET['plan_id']
            ));
        }
    }

    /**
     * Manages all models.
     */
    public function actionAdmin($splan_id) {
        $shiftPlan = ShiftPlan::model()->find('id=:id', array(':id' => $splan_id));
        $model = new ShiftDetail('search');
        $model->plan_id = $splan_id;
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['ShiftDetail'])) {
            $model->attributes = $_GET['ShiftDetail'];
            //$model->statusNew = $_GET['ShiftDetail']['status'];
        }
        if (isset($_GET['btn_UpdateData']))
            $this->saveTFHandScan($splan_id);

        $this->render('admin', array(
            'model' => $model,
            'splan_id' => $splan_id,
            'name_plan' => $shiftPlan->name . ' - ' . $shiftPlan->department->name,
            'dep_id' => $shiftPlan->department_id,
        ));
    }

    public function actiondetReport($splan_id) {
        $model = new ReportDetail('search');
        $shiftPlan = ShiftPlan::model()->find('id=:plan_id', array(':plan_id' => $splan_id));
        $dep_id = $shiftPlan->department_id;
        $monthYear = date('m-Y', strtotime($shiftPlan->startdate));
        $year = date('Y', strtotime($shiftPlan->startdate));

        if (isset($_GET['ReportDetail'])) {
            $model->attributes = $_GET['ReportDetail'];
        }

        $this->render('detReport', array(
            'plan_id' => $splan_id,
            'model' => $model,
            'dep_id' => $dep_id,
            'monthYear' => $monthYear,
            'year' => $year
        ));
    }

    public function actionValueBonusTime($plan_id) {
        $model = new Payrollrule();
        $shiftPlan = ShiftPlan::model()->findByPk($plan_id);
        $monthYear = date('m-Y', strtotime($shiftPlan->startdate));
        $year = date('Y', strtotime($shiftPlan->startdate));

        if (isset($_POST['Payrollrule'])) {
            $model->attributes = $_POST['Payrollrule'];
            $model->save();
            $sql = 'SELECT hr_reportDetail(:plan_id,:year,:monthYear)';
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(':plan_id', $plan_id, PDO::PARAM_INT);
            $command->bindParam(':year', $year, PDO::PARAM_STR);
            $command->bindParam(':monthYear', $monthYear, PDO::PARAM_STR);
            $command->execute();
            echo CJSON::encode(array('ok' => true));
            exit;
        }
    }

    public function actionUpdateValueBT($plan_id, $year, $monthYear) {
        $model = Payrollrule::model()->find('type = 7 and monthYear=:monthYear', array(':monthYear' => $year));

        if (isset($_POST['Payrollrule'])) {
            $model->attributes = $_POST['Payrollrule'];
            $model->updateByPk($model->id, $model->attributes);
            $sql = 'SELECT hr_UpdateReportDetail(:plan_id,:year,:monthYear)';
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(':plan_id', $plan_id, PDO::PARAM_INT);
            $command->bindParam(':year', $year, PDO::PARAM_STR);
            $command->bindParam(':monthYear', $monthYear, PDO::PARAM_STR);
            $command->execute();
            echo CJSON::encode(array('ok' => true));
            exit;
        }
    }

    public function actionCreateValueBT($plan_id, $year, $monthYear) {
        $sql = 'SELECT hr_UpdateReportDetail(:plan_id,:year,:monthYear)';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':plan_id', $plan_id, PDO::PARAM_INT);
        $command->bindParam(':year', $year, PDO::PARAM_STR);
        $command->bindParam(':monthYear', $monthYear, PDO::PARAM_STR);
        $command->execute();
        echo CJSON::encode(array('ok' => true));
        exit;
    }

    public function actionGenReport($splan_id) {
        $model = new ReportDetail();
        $shiftPlan = ShiftPlan::model()->find('id=:plan_id', array(':plan_id' => $splan_id));
        $dep_id = $shiftPlan->department_id;
        $monthYear = date('m-Y', strtotime($shiftPlan->startdate));
        $year = date('Y', strtotime($shiftPlan->startdate));

        $this->render('genReport', array(
            'name_plan' => $shiftPlan->name . ' - ' . $shiftPlan->department->name,
            'plan_id' => $splan_id,
            'model' => $model,
            'dep_id' => $dep_id,
            'monthYear' => $monthYear,
            'year' => $year
        ));
    }

    
    public function actionUpdateTR($id) {
        $model = $this->loadModel($id);
        $history = new ShiftDetailHistory();
        $history->attributes = array('timeIn' => $model->timeIn, 'timeOut' => $model->timeOut, 'shift_detail_id' => $id, '');

        if (isset($_POST['ShiftDetail'])) {
            $model->attributes = $_POST['ShiftDetail'];
            $model->status = 0;
            if ($model->save(false)) {
                $history->save(false);
            }
        }

        $this->render('updateTR', array(
            'model' => $model,
        ));
    }

    public function actionUpdateTimeR($splan_id) {
        $shiftPlan = ShiftPlan::model()->find('id=:id', array(':id' => $splan_id));
        $model = new ShiftDetail();
        $model->plan_id = $splan_id;
        $model->unsetAttributes();
        $checkGrid = false;

        if (isset($_GET['ShiftDetail'])) {
            $model->attributes = $_GET['ShiftDetail'];
        }
        if (isset($_GET['btn_UpdateData']))
            $this->saveTFHandScan($splan_id);
        if (isset($_GET['emp_idNew'])) {
            $model->emp_id = $_GET['emp_idNew'];
            $checkGrid = true;
        }

        $this->render('updateTimeR', array(
            'model' => $model,
            'splan_id' => $splan_id,
            'name_plan' => $shiftPlan->name . ' - ' . $shiftPlan->department->name,
            'dep_id' => $shiftPlan->department_id,
            'checkGrid' => $checkGrid,
        ));
    }

    public function actionAcceptTimeR() {
        if (isset($_POST['timeIn'])) {
            $listTimeIn = $_POST['timeIn'];
            $listTimeOut = $_POST['timeOut'];
            $listNote = $_POST['note'];
            foreach ($listTimeIn as $id => $time) {
                $attributes = array(
                    'timeIn' => empty($time) ? null : trim($time),
                    'timeOut' => empty($listTimeOut[$id]) ? null : trim($listTimeOut[$id]),
                    'note' => trim($listNote[$id]),
                    'status' => !empty($time) && !empty($listTimeOut[$id]) ? 0 : 1,
                );
                $sdOri = ShiftDetail::model()->findByPk($id);
                if (ShiftDetail::model()->updateByPk($id, $attributes)) {
                    if ($sdOri->timeIn != $attributes['timeIn'] || $sdOri->timeOut != $attributes['timeOut']) {
                        $attributesHis = array(
                            'emp_id' => $sdOri->emp->id,
                            'timeIn' => $sdOri->timeIn,
                            'timeOut' => $sdOri->timeOut,
                            'timeInEdit' => $attributes['timeIn'],
                            'timeOutEdit' => $attributes['timeOut'],
                            'note' => $attributes['note'],
                            'userEdit' => Yii::app()->user->id,
                            'dayEdit' => time(),
                            'shift_detail_id' => $id,
                            'type' => 1, //edit time of shiftDetail
                        );
                        $sdHis = new ShiftDetailHistory();
                        $sdHis->attributes = $attributesHis;
                        $sdHis->save(false);
                    }
                }
            }
            echo CJSON::encode(array('result' => true));
            exit;
        } else {
            echo CJSON::encode(array('result' => false));
            exit;
        }
    }

    public function actionAcceptDayOf($splan_id) {
        $shiftPlan = ShiftPlan::model()->find('id=:id', array(':id' => $splan_id));
        $model = new ShiftDetail();
        $model->plan_id = $splan_id;
        $model->unsetAttributes();
        $checkGrid = false;

        if (isset($_GET['ShiftDetail'])) {
            $model->attributes = $_GET['ShiftDetail'];
        }
        if (isset($_GET['btn_UpdateData']))
            $this->saveTFHandScan($splan_id);
        if (isset($_GET['emp_idNew'])) {
            $model->emp_id = $_GET['emp_idNew'];
            $checkGrid = true;
        }

        $this->render('acceptDayOf', array(
            'model' => $model,
            'splan_id' => $splan_id,
            'name_plan' => $shiftPlan->name . ' - ' . $shiftPlan->department->name,
            'dep_id' => $shiftPlan->department_id,
            'checkGrid' => $checkGrid,
        ));
    }

    public function actionSubmitDayOf() {
        if (isset($_POST['noteDayoff'])) {
            $listNote = $_POST['noteDayoff'];
            foreach ($listNote as $id => $note) {
                $attributes = array(
                    'noteDayoff' => $note,
                    'type' => isset($_POST['dayOf'][$id]) ? $_POST['dayOf'][$id] : 0,
                );
                $sdOri = ShiftDetail::model()->findByPk($id);
                if ($sdOri->type != $attributes['type'] || $sdOri->noteDayoff != $attributes['noteDayoff']) {
                    if (ShiftDetail::model()->updateByPk($id, $attributes)) {
                        $dayOffHis = new ShiftDetailHistory();
                        $sttHis = array(
                            'note' => $attributes['noteDayoff'],
                            'shift_detail_id' => $id,
                            'userEdit' => Yii::app()->user->id,
                            'dayEdit' => time(),
                            'type' => '2', //Dayoff
                            'statusDayoff' => $attributes['type'],
                        );
                        $dayOffHis->attributes = $sttHis;
                        $dayOffHis->save(false);
                    }
                }
            }
            echo CJSON::encode(array('result' => true));
            exit;
        } else {
            echo CJSON::encode(array('result' => false));
            exit;
        }
    }

    public function actionMapEmpId() {
        $model = new Employee();
        $model->status = 0;

        if (isset($_GET['Employee'])) {
            $model->attributes = $_GET['Employee'];
        }

        $this->render('mapEmpId', array(
            'model' => $model,
        ));
    }

    public function actionAcceptMapEmpId() {
        $listEmpId = $_POST['userID'];
        foreach ($listEmpId as $id => $number) {
            try {
                Employee::model()->updateByPk($id, array('number' => $number));
            } catch (CException $ex) {
                echo CJSON::encode(array('duplicateEmpId' => $number));
                exit;
            }
        }
        echo CJSON::encode(array('duplicateEmpId' => true));
        exit;
    }

    public function actionGrade() {
        $note = null;
        $dep_id = null;
        $model = new Employee();
        $model->status = 0;
        $checkGrid = false;

        /* FOR ROLE nhanvien */
        $employee = Employee::model()->find('id=:id', array(':id' => User::model()->find('id=:userId', array(':userId' => Yii::app()->user->id))->emp_id));
        if (isset($employee))
            $graDeNote = Grade::model()->find('dep_id=:dep_id', array(':dep_id' => $employee->department_id));
        else
            $graDeNote = null;
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear = :monthyear', array(':emp_id' => $employee->id, ':monthyear' => date('m-Y')));
        if (!isset($grade))
            $grade = new Grade();
        /* FOR ROLE nhanvien */

        if (isset($_GET['Employee'])) {
            $model->attributes = $_GET['Employee'];
            $model->montYear = $_GET['Employee']['monthYear'];
            $dep_id = $model->department_id;
            $note = Grade::model()->find('dep_id=:dep_id', array(':dep_id' => $model->department_id));
            $checkGrid = true;
        }

        $this->render('grade', array(
            'dep_id' => $dep_id,
            'note' => $note,
            'grade' => $grade,
            'employee' => $employee,
            'gradeNote' => $graDeNote,
            'model' => $model,
            'checkGrid' => $checkGrid,
        ));
    }

    public function actionCreateGradeNote($dep_id) {
        $model = new Grade('gradeNote');

        if (isset($_POST['Grade'])) {
            $model->attributes = $_POST['Grade'];
            $model->dep_id = $dep_id;
            $validate = $model->validate();
            if ($validate) {
                if ($model->save(false)) {
                    Yii::app()->user->setFlash('success', '<strong>Thêm thành công</strong>');
                    $this->redirect(array('grade'));
                }
            }
        }

        $this->render('createGradeNote', array(
            'model' => $model,
        ));
    }

    public function actionUpdateGradeNote($dep_id) {
        $model = Grade::model()->find('dep_id=:dep_id', array(':dep_id' => $dep_id));
        $model->scenario = 'gradeNote';

        if (isset($_POST['Grade'])) {
            $model->attributes = $_POST['Grade'];
            $model->dep_id = $dep_id;
            $validate = $model->validate();
            if ($validate) {
                if ($model->save(false)) {
                    Yii::app()->user->setFlash('success', '<strong>Cập nhật thành công</strong>');
                    $this->redirect(array('grade'));
                }
            }
        }

        $this->render('updateGradeNote', array(
            'model' => $model,
        ));
    }

    public function actionAcceptGrade() {

        //for role nhanvien
        if (isset($_POST['Grade'])) {
            $grade = new Grade();
            $grade->attributes = $_POST['Grade'];
            if ($grade->save(false)) {
                Yii::app()->user->setFlash('success', '<strong>Xếp loại của bạn đã được ghi nhận.</strong>');
                $this->redirect(array('grade'));
            }
        }
        //for role #
        if (isset($_POST['note'])) {
            $sessionMonth = null;
            if (isset($_SESSION['month'])) {
                $sessionMonth = trim($_SESSION['month']);
            }
            foreach ($_POST['note'] as $key => $val) {
                $gradeArray = array(
                    'emp_id' => $key,
                    'a' => isset($_POST['A'][$key]) ? $_POST['A'][$key] : 0,
                    'bc' => isset($_POST['BC'][$key]) ? $_POST['BC'][$key] : null,
                    'bonusMonth' => $_POST['bonus'][$key],
                    'monthyear' => $sessionMonth,
                    'note' => $val,
                    'type' => 1,
                );
                $exitGrade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $key, ':monthyear' => $sessionMonth));
                if (empty($exitGrade)) {
                    $gradeNew = new Grade();
                    $gradeNew->attributes = $gradeArray;
                    $gradeNew->save(false);
                } else {
                    $exitGrade->attributes = $gradeArray;
                    $exitGrade->save(false);
                }
            }
            echo CJSON::encode(array('susscess' => true));
            exit;
        }
    }

    public function actionUpdateGrade($id) {
        if (isset($_POST['Grade'])) {
            $grade = Grade::model()->findByPk($id);
            $grade->attributes = $_POST['Grade'];
            if ($grade->save(false)) {
                Yii::app()->user->setFlash('success', '<strong>Xếp loại của bạn đã được Cập nhật.</strong>');
                $this->redirect(array('grade'));
            }
        }
    }

    public function timeOfShift($data, $row, $all) {
        $hourOfShift = null;
        $minuteOfShift = null;
        $monthYear = explode('-', $all->grid->dataProvider->keys['monthYear']);
        $month = $monthYear['0'];
        $year = $monthYear['1'];
        $id = $data->id;
        $model = Yii::app()->db->createCommand()
                ->select('shift_id')
                ->from('hr_shift_detail')
                ->where('emp_id=:id and month(date)=:month and year(date)=:year', array(':id' => $id, ':month' => $month, ':year' => $year))
                ->queryAll();
        foreach ($model as $item) {
            $shift_id = $item['shift_id'];
            $modelShift = Shift::model()->find('id=:id', array(':id' => $shift_id));
            $listStart = explode(':', $modelShift['starttime']);
            $startTimeToSec = (int) $listStart['0'] * 3600 + (int) $listStart['1'] * 60;
            $listEnd = explode(':', $modelShift['endtime']);
            $endTimeToSec = (int) $listEnd['0'] * 3600 + (int) $listEnd['1'] * 60;
            $hourOfShift += gmdate('H', ($endTimeToSec - $startTimeToSec));
            $minuteOfShift += gmdate('i', ($endTimeToSec - $startTimeToSec));
        }
        if ($minuteOfShift > 59) {
            $minuteOfShift = (String) $minuteOfShift / 60;
            $listMinute = explode('.', $minuteOfShift);
            $hourOfShift += (int) $listMinute['0'];
            $minuteOfShift = sprintf('%02d', ($minuteOfShift % 60));
        }
        if (is_null($hourOfShift))
            return null;
        else
            return $hourOfShift . ':' . $minuteOfShift;
    }

    public function timeOfTr($data, $row, $all) {
        $hourOfShift = null;
        $minuteOfShift = null;
        $monthYear = explode('-', $all->grid->dataProvider->keys['monthYear']);
        $month = $monthYear['0'];
        $year = $monthYear['1'];
        $id = $data->id;
        $model = Yii::app()->db->createCommand()
                ->select('timeIn, timeOut')
                ->from('hr_shift_detail')
                ->where('emp_id=:id and month(date)=:month and year(date)=:year', array(':id' => $id, ':month' => $month, ':year' => $year))
                ->queryAll();
        foreach ($model as $item) {
            if (is_null($item['timeIn']) || is_null($item['timeOut'])) {
                $hourOfShift += 0;
                $minuteOfShift += 0;
            } else {
                $listStart = explode(':', $item['timeIn']);
                $startTimeToSec = (int) $listStart['0'] * 3600 + (int) $listStart['1'] * 60;
                $listEnd = explode(':', $item['timeOut']);
                $endTimeToSec = (int) $listEnd['0'] * 3600 + (int) $listEnd['1'] * 60;
                $hourOfShift += gmdate('H', ($endTimeToSec - $startTimeToSec));
                $minuteOfShift += gmdate('i', ($endTimeToSec - $startTimeToSec));
            }
        }
        if ($minuteOfShift > 59) {
            $minuteOfShift = (String) $minuteOfShift / 60;
            $listMinute = explode('.', $minuteOfShift);
            $hourOfShift += (int) $listMinute['0'];
            $minuteOfShift = sprintf('%02d', ($minuteOfShift % 60));
        }
        if (is_null($hourOfShift))
            return null;
        else
            return $hourOfShift . ':' . $minuteOfShift;
    }

    public function rateTr($data, $row, $all) {
        $hourOfShift = null;
        $minuteOfShift = null;
        $hourOfShift1 = null;
        $minuteOfShift1 = null;
        $monthYear = explode('-', $all->grid->dataProvider->keys['monthYear']);
        $month = $monthYear['0'];
        $year = $monthYear['1'];
        $id = $data->id;
        $model = Yii::app()->db->createCommand()
                ->select('shift_id, timeIn, timeOut')
                ->from('hr_shift_detail')
                ->where('emp_id=:id and month(date)=:month and year(date)=:year', array(':id' => $id, ':month' => $month, ':year' => $year))
                ->queryAll();
        foreach ($model as $item) {
            $shift_id = $item['shift_id'];
            $modelShift = Shift::model()->find('id=:id', array(':id' => $shift_id));
            $listStart = explode(':', $modelShift['starttime']);
            $startTimeToSec = (int) $listStart['0'] * 3600 + (int) $listStart['1'] * 60;
            $listEnd = explode(':', $modelShift['endtime']);
            $endTimeToSec = (int) $listEnd['0'] * 3600 + (int) $listEnd['1'] * 60;
            $hourOfShift += gmdate('H', ($endTimeToSec - $startTimeToSec));
            $minuteOfShift += gmdate('i', ($endTimeToSec - $startTimeToSec));

            if (is_null($item['timeIn']) || is_null($item['timeOut'])) {
                $hourOfShift1 += 0;
                $minuteOfShift1 += 0;
            } else {
                $listStart1 = explode(':', $item['timeIn']);
                $startTimeToSec1 = (int) $listStart1['0'] * 3600 + (int) $listStart1['1'] * 60;
                $listEnd1 = explode(':', $item['timeOut']);
                $endTimeToSec1 = (int) $listEnd1['0'] * 3600 + (int) $listEnd1['1'] * 60;
                $hourOfShift1 += gmdate('H', ($endTimeToSec1 - $startTimeToSec1));
                $minuteOfShift1 += gmdate('i', ($endTimeToSec1 - $startTimeToSec1));
            }
        }
        if ($minuteOfShift > 59) {
            $minuteOfShift = (String) $minuteOfShift / 60;
            $listMinute = explode('.', $minuteOfShift);
            $hourOfShift += (int) $listMinute['0'];
            $minuteOfShift = sprintf('%02d', ($minuteOfShift % 60));
        }
        if ($minuteOfShift1 > 59) {
            $minuteOfShift1 = (String) $minuteOfShift1 / 60;
            $listMinute1 = explode('.', $minuteOfShift1);
            $hourOfShift1 += (int) $listMinute1['0'];
            $minuteOfShift1 = sprintf('%02d', ($minuteOfShift1 % 60));
        }
        if (is_null($hourOfShift) || is_null($hourOfShift1))
            return null;
        else {
            $timeShiftToSec = (int) $hourOfShift * 3600 + (int) $minuteOfShift * 60;
            $a1 = -($hourOfShift1 - $hourOfShift);
            $a2 = -($minuteOfShift1 - $minuteOfShift);
            $testToSec = (int) $a1 * 3600 + (int) $a2 * 60;
            $rate = -(($testToSec / $timeShiftToSec) * 100);
            return $rate;
        }
    }

    public function getListTime() {
        $listTime = array();
        for ($i = 0; $i <= 23; $i++) {
            $j = 0;
            while ($j <= 59) {
                $t = sprintf('%02d:%02d', $i, $j);
                $listTime[] = $t;
                $j++;
            }
        }
        return $listTime;
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = ShiftDetail::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'hr-shift-detail-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionSaveShiftDetail() {

        $ids = $_POST['ids'];
        $date = date('Y-m-d', strtotime($_POST['shiftdate']));
        $shiftId = $_POST['shiftid'];

        $error = 0;
        $shiftEvent = Shift::model()->findByPk($shiftId);
        if (isset($ids)) {
            foreach ($ids as $id => $item) {
                //var_dump($item);
                $model = ShiftDetail::model()->find("shift_id=:shift_id and emp_id=:emp_id and date=:date", array(':shift_id' => $shiftId, ':emp_id' => $item, ':date' => $date));
                if (!isset($model)) {
                    $model = new ShiftDetail;
                    $model->shift_id = $shiftId;
                    $model->date = $_POST['shiftdate'];
                    $model->emp_id = $item;
                    $model->save(false);
                }
            }
        }

        echo CJSON::encode(array('error' => $error));
        exit;
    }

    public function actionUpdateShiftDetail() {
        $date = date('y-m-d', strtotime($_POST['date']));
        $error = 0;
        $model = $this->loadModel($_POST['ids'][0]);
        $detail = ShiftDetail::model()->findBySql('select * from hr_shift_detail WHERE ischanged=0 and emp_id =:emp_id and date =:date and id!=:id', array(':emp_id' => $model->emp_id, ':date' => $date, ':id' => $_POST['ids'][0]));
        if ($detail == null) {
            $model->date = $_POST['date'];
            if ($model->save(false)) {
                
            } else {
                $error = 1;
            }
        } else {
            $error = 1;
        }
        echo CJSON::encode(array('error' => $error));
        exit;
    }

    public function actionLoadShiftDetail() {
        $listEventShift = array();
        $listEmpId = '';
        if (!isset($_POST['ids'])) {
            $listEventShift = array();
            $error = 0;
            echo CJSON::encode(array('error' => $error, 'listEventShift' => $listEventShift));
            exit;
        }
        for ($i = 0; $i < count($_POST['ids']) - 1; $i++) {
            $listEmpId = $listEmpId . $_POST['ids'][$i] . ',';
        }
        $listEmpId = $listEmpId . $_POST['ids'][$i];
        $planid = $_POST['plan_id'];
        $sql = "SELECT s.`name`,s.starttime,s.endtime,e.code,e.lastname,d.date,d.id,s.colorEvent,d.from_correct,d.to_correct
                 FROM hr_shift s
                 INNER JOIN hr_shift_detail d ON s.id = d.shift_id
                 INNER JOIN hr_employee e ON e.id = d.emp_id
                 where ischanged =0 and s.shift_plan_id=:plan_id AND emp_id IN (" . $listEmpId . ")";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":plan_id", $planid, PDO::PARAM_STR);
        $result = $command->queryAll();
        foreach ($result as $k => $i) {
            $timeShiftStart = explode(':', $i['starttime']);
            $timeShiftEnd = explode(':', $i['endtime']);
            $corect = '';
            if ($i['from_correct'] != null && $i['to_correct'] != null) {
                $corect = 'DC :' . substr($i['from_correct'], 0, -3) . '=>' . substr($i['to_correct'], 0, -3);
            }
            $listEventShift[] = array(
                'id' => $i['id'],
                'title' => $i['name'] . ':' . substr($i['starttime'], 0, -3) . '=>' . substr($i['endtime'], 0, -3),
                'description' => $i['code'] . " | " . $i['lastname'],
                'corect' => $corect,
                'start' => date('Y-m-d H:i', strtotime($i['date']) + ($timeShiftStart[0] * 60 + $timeShiftStart[1]) * 60),
                'end' => date('Y-m-d H:i', strtotime($i['date']) + ($timeShiftEnd[0] * 60 + $timeShiftEnd[1]) * 60),
                'allDay' => false,
                'className' => array(0 => $i['id']),
                'color' => ($i['colorEvent'] != null) ? $i['colorEvent'] : "",
            );
        }
        $error = 0;
        echo CJSON::encode(array('error' => $error, 'listEventShift' => $listEventShift));
        exit;
    }

    public function saveTFHandScan($plan_id) {
        $sql = 'update  hr_shift_detail d
INNER JOIN hr_employee e on d.emp_id=e.id
INNER JOIN hr_shift s on s.id=d.shift_id
set d.timeIn=(SELECT min(time) from hr_time_recorder r where r.date=d.date and r.emp_number=e.number and r.time between s.starttime -30*60 and s.starttime +30*60),
d.timeOut=(SELECT min(time) from hr_time_recorder r where IF(s.isovernight=1,DATE_ADD(d.date,INTERVAL 1 DAY),d.date) = r.date and r.emp_number=e.number and r.time between s.endtime -30*60 and s.endtime +30*60),
d.status=IF(ISNULL((SELECT min(time) from hr_time_recorder r where r.date=d.date and r.emp_number=e.number and r.time between s.starttime -30*60 and s.starttime +30*60)),1,IF(ISNULL((SELECT min(time) from hr_time_recorder r where IF(s.isovernight=1,DATE_ADD(d.date,INTERVAL 1 DAY),d.date) = r.date and r.emp_number=e.number and r.time between s.endtime -30*60 and s.endtime +30*60)),1,0))
WHERE d.shift_id=:id';
        $command = Yii::app()->db->createCommand($sql);
        $shift = Shift::model()->findAll('shift_plan_id=:id', array(':id' => $plan_id));
        foreach ($shift as $item) {
            $shift_id = $item->id;
            $command->bindParam(':id', $shift_id);
            $command->execute();
        }
    }

    public function actionRegTimeIn() {
        $user = User::model()->findByPk(Yii::app()->user->id);
        $model = Employee::model()->findByPk($user->emp_id);
        $shiftDetail = ShiftDetail::model()->find('date=:date and emp_id=:emp_id', array(':date' => date('Y-m-d'), ':emp_id' => $user->emp_id));

        if (isset($_POST['ShiftDetail'])) {
            $shiftDetail->attributes = $_POST['ShiftDetail'];
            if (empty($shiftDetail->timeOut)) {
                $shiftDetail->timeOut = null;
            }
            if ($shiftDetail->update(false)) {
                echo CJSON::encode(array('success' => '1'));
                exit;
            }
        }

        $this->render('regTimeIn', array(
            'model' => $model,
            'shiftDetail' => $shiftDetail,
        ));
    }

    public function actionRegTimeOut() {
        $user = User::model()->findByPk(Yii::app()->user->id);
        $model = Employee::model()->findByPk($user->emp_id);
        $shiftDetail = ShiftDetail::model()->find('date=:date and emp_id=:emp_id', array(':date' => date('Y-m-d'), ':emp_id' => $user->emp_id));

        if (isset($_POST['ShiftDetail'])) {
            $shiftDetail->attributes = $_POST['ShiftDetail'];
            if (empty($shiftDetail->timeIn)) {
                $shiftDetail->timeIn = null;
            }
            if ($shiftDetail->update(false)) {
                echo CJSON::encode(array('success' => '1'));
                exit;
            }
        }

        $this->render('regTimeOut', array(
            'model' => $model,
            'shiftDetail' => $shiftDetail,
        ));
    }

    public function actionEarlyLate() {
        $checkEarlyLate = null;
        $earlyLate = null;
        $hourStart = $_POST['hourStart'];
        $minuteStart = $_POST['minuteStart'];
        $hourTimeIn = $_POST['hourTimeIn'];
        $minuteTimeIn = $_POST['minuteTimeIn'];
        $startTimeToSec = (int) $hourStart * 3600 + (int) $minuteStart * 60;
        $timeInToSec = (int) $hourTimeIn * 3600 + (int) $minuteTimeIn * 60;
        $check = $startTimeToSec - $timeInToSec;
        if ($check > 0) {
            $checkEarlyLate = 1;
            $earlyLate = gmdate('H:i', $check);
            echo CJSON::encode(array('label' => $checkEarlyLate, 'earlyLate' => $earlyLate));
            exit;
        } else {
            $checkEarlyLate = 2;
            $subCheck = substr($check, 1);
            $earlyLate = gmdate('H:i', $subCheck);
            echo CJSON::encode(array('label' => $checkEarlyLate, 'earlyLate' => $earlyLate));
            exit;
        }
    }

    public function checkA($data, $row, $all) {
        $emtyGrade = null;
        $monthYear = $all->grid->dataProvider->keys['monthYear'];
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $data->id, ':monthyear' => $monthYear));
        if (!empty($grade))
            $emtyGrade = false;
        else
            $emtyGrade = true;
        return CHtml::checkBox("A[" . $data->id . "]", $emtyGrade == true ? false : implode(",", array_keys($data->grade(array("index" => "a")))), array("class" => ""));
    }

    public function checkB($data, $row, $all) {
        $emtyGrade = null;
        $monthYear = $all->grid->dataProvider->keys['monthYear'];
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $data->id, ':monthyear' => $monthYear));
        if (!empty($grade))
            $emtyGrade = false;
        else
            $emtyGrade = true;
        return CHtml::radioButton("BC[" . $data->id . "]", $emtyGrade == true ? false : implode(",", array_keys($data->grade(array("index" => "bc")))) == "0" ? true : false, array(
                    "class" => "",
                    "value" => "0",
                        //"onclick" => "js:checkB(this)",
                ));
    }

    public function checkC($data, $row, $all) {
        $emtyGrade = null;
        $monthYear = $all->grid->dataProvider->keys['monthYear'];
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $data->id, ':monthyear' => $monthYear));
        if (!empty($grade))
            $emtyGrade = false;
        else
            $emtyGrade = true;
        return CHtml::radioButton("BC[" . $data->id . "]", $emtyGrade == true ? false : implode(",", array_keys($data->grade(array("index" => "bc")))), array(
                    "class" => "",
                    "value" => "1",
                        //"onclick" => "js:checkC(this)",
                ));
    }

    public function checkBonusMonth($data, $row, $all) {
        $emtyGrade = null;
        $monthYear = $all->grid->dataProvider->keys['monthYear'];
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $data->id, ':monthyear' => $monthYear));
        if (!empty($grade))
            $emtyGrade = false;
        else
            $emtyGrade = true;
        return CHtml::textField("bonus[" . $data->id . "]", $emtyGrade ? null : implode(",", array_keys($data->grade(array("index" => "bonusMonth")))), array("class" => "span isnum", "style" => "margin-bottom:0px;"));
    }

    public function checkNote($data, $row, $all) {
        $emtyGrade = null;
        $monthYear = $all->grid->dataProvider->keys['monthYear'];
        $grade = Grade::model()->find('emp_id=:emp_id and monthyear=:monthyear', array(':emp_id' => $data->id, ':monthyear' => $monthYear));
        if (!empty($grade))
            $emtyGrade = false;
        else
            $emtyGrade = true;
        return CHtml::textField("note[" . $data->id . "]", $emtyGrade ? null : implode(",", array_keys($data->grade(array("index" => "note")))), array("class" => "span", "style" => "margin-bottom:0px;"));
    }

    public function actionSessionNew() {
        $_SESSION[$_POST['name']] = $_POST['value'];
    }

    public function actionSessionUnset() {
        unset($_SESSION['month']);
    }

}
