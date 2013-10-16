<?php

class SettingsController extends BaseController
{
    public $layout = '//layouts/column2';

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionColors()
    {

        if (isset($_POST['Settings'])) {
            foreach ($_POST['Settings'] as $key => $v) {
                Yii::app()->settings->set('hr', $key, $v, true);
            }
        }
        $this->render('colors');
    }

    public function actionHolidays()
    {
        $model = new Eventcalendar();
        $dataProvider = new CActiveDataProvider('Eventcalendar', array(
            'criteria' => array(
                'condition' => 'associationType=1',
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $this->render('holidays', array('model' => $model, 'dataProvider' => $dataProvider));
    }

    public function descriptionHaveColor($data, $row)
    {
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_holiday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_holidays = $i[0];
        }
        $eventHolidays = Eventcalendar::model()->findAll('associationType = "1"');
        foreach ($eventHolidays as $item) {
            if ($data->id == $item->id) {
                return $data->description = '<span style="color:' . $color_event_holidays . ' ;background-color:' . $color_event_holidays . ';">....</span>';
            }
        }
    }

    public function startDateOfHoliday($data, $row)
    {
        $timespanTodate = date('d-m-Y', strtotime(date("d", $data->startDate) . '-' . date("m", $data->startDate) . '-' . date("Y")));
        return $data->startDate == null ? null : $timespanTodate;
    }

    public function dueDateOfHoliday($data, $row)
    {
        $timespanTodate = date('d-m-Y', strtotime(date("d", $data->dueDate) . '-' . date("m", $data->dueDate) . '-' . date("Y")));
        return $data->dueDate == null ? null : $timespanTodate;
    }
}