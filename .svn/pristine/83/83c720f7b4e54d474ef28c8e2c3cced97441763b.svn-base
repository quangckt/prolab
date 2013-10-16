<?php
	//var_dump($this);
?>

<?php $this->beginContent('//layouts/main'); ?>
  <div class="row-fluid">
    <div class="span2 " id="left-menu">
    <div class="well sidebar-nav sidebar-nav-fixed">
                     <?php 
                     if(isset($this->module->menuFunc)){
                         $this->widget('bootstrap.widgets.TbMenu', array('items'=>$this->module->menuFunc,'type'=>'list'));
                     }
                     ?>
        </div>                     
    </div>
    <div class="span10" id="view-content">
      <!--Body content-->
      <?php $this->widget('bootstrap.widgets.TbAlert'); ?>
      <div class="row-fluid ">
      <div class="span12">
         
        <?php echo $content; ?>
      
        </div>
     </div>
    </div>    
 </div>
<?php $this->endContent(); ?>