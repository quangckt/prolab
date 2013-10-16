<?php

/**
 * This is the model class for table "eventcalendar".
 *
 * The followings are the available columns in table 'eventcalendar':
 * @property string $id
 * @property integer $user_id
 * @property string $assignedTo
 * @property integer $calendarId
 * @property string $description
 * @property integer $visibility
 * @property integer $associationId
 * @property string $associationType
 * @property string $associationName
 * @property string $startDate
 * @property string $dueDate
 * @property integer $showTime
 * @property string $priority
 * @property string $type
 * @property string $createDate
 * @property string $complete
 * @property string $reminder
 * @property string $completedBy
 * @property string $completeDate
 * @property string $lastUpdated
 * @property string $updatedBy
 * @property string $workflowId
 * @property string $stageNumber
 * @property integer $allDay
 * @property string $color
 * @property string $syncGoogleCalendarEventId
 */
class Eventcalendar extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Eventcalendar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eventcalendar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, description, startDate', 'required'),
			array('user_id, calendarId, visibility, associationId, showTime, allDay', 'numerical', 'integerOnly'=>true),
			array('assignedTo, associationType, startDate, dueDate, type, createDate, completedBy, completeDate, lastUpdated, updatedBy, color', 'length', 'max'=>20),
			array('associationName', 'length', 'max'=>100),
			array('priority, workflowId, stageNumber', 'length', 'max'=>10),
			array('complete, reminder', 'length', 'max'=>5),
			array('description, syncGoogleCalendarEventId', 'safe'),
            //array('startDate', 'date','format'=>'dd-MM-yyyy hh:mm a'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, assignedTo, calendarId, description, visibility, associationId, associationType, associationName, startDate, dueDate, showTime, priority, type, createDate, complete, reminder, completedBy, completeDate, lastUpdated, updatedBy, workflowId, stageNumber, allDay, color, syncGoogleCalendarEventId', 'safe', 'on'=>'search'),
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
            'eventCalendar' => array(self::BELONGS_TO, 'Users11', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'assignedTo' => 'Assigned To',
			'calendarId' => 'Calendar',
			'description' => 'Description',
			'visibility' => 'Visibility',
			'associationId' => 'Association',
			'associationType' => 'Association Type',
			'associationName' => 'Association Name',
			'startDate' => 'Start Date',
			'dueDate' => 'Due Date',
			'showTime' => 'Show Time',
			'priority' => 'Priority',
			'type' => 'Type',
			'createDate' => 'Create Date',
			'complete' => 'Complete',
			'reminder' => 'Reminder',
			'completedBy' => 'Completed By',
			'completeDate' => 'Complete Date',
			'lastUpdated' => 'Last Updated',
			'updatedBy' => 'Updated By',
			'workflowId' => 'Workflow',
			'stageNumber' => 'Stage Number',
			'allDay' => 'All Day',
			'color' => 'Color',
			'syncGoogleCalendarEventId' => 'Sync Google Calendar Event',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('assignedTo',$this->assignedTo,true);
		$criteria->compare('calendarId',$this->calendarId);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('visibility',$this->visibility);
		$criteria->compare('associationId',$this->associationId);
		$criteria->compare('associationType',$this->associationType,true);
		$criteria->compare('associationName',$this->associationName,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('dueDate',$this->dueDate,true);
		$criteria->compare('showTime',$this->showTime);
		$criteria->compare('priority',$this->priority,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('complete',$this->complete,true);
		$criteria->compare('reminder',$this->reminder,true);
		$criteria->compare('completedBy',$this->completedBy,true);
		$criteria->compare('completeDate',$this->completeDate,true);
		$criteria->compare('lastUpdated',$this->lastUpdated,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);
		$criteria->compare('workflowId',$this->workflowId,true);
		$criteria->compare('stageNumber',$this->stageNumber,true);
		$criteria->compare('allDay',$this->allDay);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('syncGoogleCalendarEventId',$this->syncGoogleCalendarEventId,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}