<?php
class Reports 
{
   	public static  function createUrl($reportName,$params=array(),$filterWidget='',$mode='ViewerFx'){
      return  Yii::app()->getModule('reporting')->getReportUrl('inv',$reportName,$params,$filterWidget,$mode);
    }    
}