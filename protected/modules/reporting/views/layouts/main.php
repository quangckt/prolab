<?php
$themeURL = Yii::app()->theme->getBaseUrl();
Yii::app()->clientScript->registerCssFile($themeURL.'/css/screen.css','screen, projection');
Yii::app()->clientScript->registerScriptFile("js/splitter/splitter.js");
Yii::app()->clientScript->registerScriptFile("js/entertotab.js");
Yii::app()->clientScript->registerScriptFile("js/jquery.dirtyforms.js");
Yii::app()->clientScript->registerScriptFile("js/prolab.js");
Yii::app()->clientScript->registerScriptFile("js/form.js");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">	
	<head>
		<title></title>         
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css" media="screen"> 
			html, body { height:100%; }
			body { margin:0; padding:0; overflow:hidden; text-align:center; background-color: #e8e8e8; padding-bottom: 100px; }   
			#flashContent { display:none; }
            #leftPane{
            float:left;width:13%;height:100%;border-top:solid 1px #9cbdff;
            overflow: auto;
            margin: 0px !important;
            padding: 0px 10px !important;
            }
            #rightPane{	/*Contains toolbar and horizontal splitter*/
            float:right;height:100%;width: 100%;
            background:#f4f4f4;
            padding: 0px !important;
            margin: 0px !important;
            }
            #splitterContainer {/* Main splitter element */
            height:100%;width:100%;margin:0;padding:0;
            }
            #splitterContainer.hasleft  #rightPane{
              width: 85% !important;  
              height: 100%;
            }
            a.design-report{
               position: fixed;
               top: 0px;
               right: 0px;
               margin-right: 34px !important;
               z-index: 9000;
            }
            
            
		</style>
		<script type="text/javascript" src="<?php echo $this->module->getAssetsUrl()?>/js/swfobject.js"></script>

	</head>
	<body>
    <?php if(Yii::app()->user->checkAccess('admin')) :?>
      <a href="#" class="design-report link ">
      <i class="icon-wrench"></i>Thiết kế</a>  
    <?php endif ?>
    <?php
            $hasLeft="";
	       if(isset($_GET['filter']))
           $hasLeft="hasleft";
           
    ?>
    
    <div id="splitterContainer" class="row-fluid <?php echo $hasLeft ?>">
    <?php if($hasLeft==='hasleft') :?>
    <div id="leftPane" class="well">
        
      <?php 
      $this->widget($_GET['filter']); ?>
    </div>
    <?php endif ?>
    <div id="rightPane">
    <?php  echo $content; ?>
    </div>
    </div>
   </body>
   
<script type="text/javascript">

$(document).ready(function() {
//$("#splitterContainer").splitter({minAsize:10,maxAsize:300,splitVertical:true,A:$('#leftPane'),B:$('#rightPane'),closeableto:0});
});
</script>
         
</html>
