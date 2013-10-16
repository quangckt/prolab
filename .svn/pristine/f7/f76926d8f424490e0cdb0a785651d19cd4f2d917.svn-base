Prolab.cache=[];
Prolab.configNumFormat={
		aSep: '.',
		dGroup: '3',
		aDec: ',',
		altDec: null,
		aSign: '',
        aPad:false, 
		/** placement of currency sign
		* for prefix  pSign: 'p',
		* for suffix pSign: 's',
		*/
    }; /** deprecated way to access defaults and helper functions */

Prolab.behaviors.ajaxFormModal=function(content){
    
    
$('.ajaxFormModal:not(.ajaxFormModal-processed)',content).each(function(idx){
var self=$(this);
    self.click( function(){ 
     var m='modal'+idx;
     var url=self.attr('href')+"&ajax=1",opt={};
       if($('#'+m).hasClass('modal')){
        $('#'+m).modal();  return false;}
      if(url!=null){
        $.ajax(url,opt).done(function(data) {
         var b=$(data);
         if(!b.hasClass('form')) b=b.find('.form');
         var t=self.attr('title');
         if(t==undefined)  t=self.attr('data-original-title');
         Prolab.showModal(self,m,{title:t,body:b,submited:{}});
        })}
      return false;      
    }).addClass('ajaxFormModal-processed')})}
    

Prolab.showModal = function(self,id,settings){
  var ajaxSubmit=function(){
     m.find('form:not(.ajaxsubmit-processed)').submit(function(){
       postdata(this,settings.submited);
       return false; 
   }).addClass('ajaxsubmit-processed')} 
   
 var postdata= function(f,callbackFn){
   $.post($(f).attr('action'),$(f).serialize(),function(data,status){
    var d=$(data);
    var a = d.find('.alert-block');
    if(a) { $('body').append(a); }
    
     $('.ajaxupdate').each(function(){
       var e=$(this).attr('update');
       if(d.hasClass(e)) $(this).html(d.html());
       else if(d.find('.'+e).length>0) $(this).html($(d.find('.'+e)[0]).html());  
     });
     
     
    if(d.hasClass('form')) c.html(d);
    else if(d.find('.form').length>0) c.html(d.find('.form'));
    ajaxSubmit();
    Prolab.attachBehaviors();    
    var isError= c.find('.error').length>0;
    if(isError) {return; }
    if(m.find('.error').length==0){   
     m.find('.error').removeClass('error'); 
    }
    var callback=undefined;
    if(self.attr!==undefined)
    callback=self.attr('ajaxModalSubmited');
    if(callback!==undefined) {
    var fn=eval("("+callback+")");
    fn(data);
    }
    if(typeof callbackFn == 'function')
     callbackFn(); 
    })
    };
    //============================================
      var opt={backdrop:false};
     var m=$("<div class='modal fade'></div>"); m.attr('id',id); 
     var c=$('<div class="modal-body"></div>'); 
     if(settings.title!=undefined){
          var h=$('<div class="modal-header"></div>');
          h.append('<a class="close" data-dismiss="modal">&times;</a>');
          h.append("<h3><i class='icon-plus'></i>"+ settings.title +"</h3>");
          m.append(h)}
     c.append(settings.body);
     m.append(c);
     $('body').append(m);
     $('#'+id).modal(opt)
     ajaxSubmit();
     try {  m.draggable();} catch(e){}
     Prolab.attachBehaviors(m);
     
 return;  
};
   

Prolab.behaviors.inputFocus=function(content){
   $('form input:not(.sel)',content).each(function(){
       $(this).focus(function(){ $(this).select();});
       $(this).addClass('sel');  
   });
}

Prolab.behaviors.inputCal=function(content){
    return;
    //xem lai
   $('form input.isnum:not(.inputCal)',content).each(function(){
       $(this).change(function(){ 
         if($(this).val())
                  $(this).val(eval($(this).val().replace(/\./g,'')));
       }).addClass('inputCal');
   });
}



Prolab.behaviors.editlabel=function(content){
    $('form label',content).each(function() {
    $(this).dblclick(function(){
    //alert($(this).attr('for'));
    $v=$(this);
    $f=$(this).attr('for');
    $.get('?r=fields/elf',function(data){
    $('body').append(data);
    $('#fModal').modal('show');
    $('#fModal').find('#Fields_attributeLabel').val($v.html());
    $('#fModal').find('#Fields_fieldName').val($f);
    $('#fModal').find('#btnSaveELF').click(function(){
    var post={'fieldName':$f,'label':$('#fModal').find('#Fields_attributeLabel').val()};
    $.post('?r=fields/elf',post,function(data){
    $v.html($('#fModal').find('#Fields_attributeLabel').val());
    $('#fModal').remove();
            })})})})});
}

Prolab.behaviors.dirtyForm=function(content){
$('form', content).each(function(){
$(this).dirtyForm().submit(function(){$(this).markClean()});
});
}

Prolab.behaviors.formatNumber=function(content){
$('form input.isnum:not(.format)', content).each(function(){
       $(this).autoNumeric(Prolab.configNumFormat).addClass('format');
       $(this).autoNumericSet($(this).val());
});
}
   
Prolab.start=true;
Prolab.behaviors.datepicker=function(content){
 if(Prolab.start) {Prolab.start=false; return;}   
$('.datepicker').not('.datepicker-processed,.hasDatepicker').each(function(){
      $(this).datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['vi'], {'dateFormat':'dd-mm-yy'})).addClass('datepicker-processed');
});
}

Prolab.timepickerstart=true;
Prolab.behaviors.datetimepicker=function(content){
 if(Prolab.start) {Prolab.timepickerstart=false; return;}   
$('.timepicker').not('.timepicker-processed,.hasDatepicker').each(function(){
    var op={'dateFormat':'dd-mm-yy','timeFormat':'hh:mm TT','showOn':'focus','showSecond':false,'changeMonth':true,'changeYear':true,'value':'','tabularLevel':null,'showButtonPanel':true,'timeOnly':false,'showTimepicker':true};
      $(this).datetimepicker(op).addClass('timepicker-processed');
});
}


Prolab.behaviors.viewDesign=function(content) {
$('.design-report', content).each(function(){
        $(this).click(function(){ 
        var url =window.location.href;
        url=url.replace("ViewerFx","DesignerFx")
        location.replace(url);
        return false;    
    });
    $(this).addClass('design-report-processed');
});
}


Prolab.behaviors.autoAddLine=function(content){
$('.last-line').removeClass('last-line');    
 var t= $('.tabularInput input.qty');
 var  p=t.eq(t.length-1);
 if(p){
    p.addClass('last-line');
    $(p).blur(function(){
      if($(this).hasClass('last-line'))
      if($(this).val()>0)  
        $(".add-line").trigger('click');
    });
 }   
} 

Prolab.behaviors.enterToTab=function(content){

$('form input').keydown( function(e) {
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible:not([readonly]):not([disabled])');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        }
    });
$('form select').keydown( function(e) {
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        }
    });
    
$('form textarea').keydown( function(e) {
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        }
    });
 
 
            
}

var yiiGridViewUpdate=function(id,opt){
    if(opt==undefined)
    opt={};
    opt.complete=function(jqXHR, status) {
     if (status=='success'){
          Prolab.attachBehaviors();
        }
      };
    $.fn.yiiGridView.update(id,opt);
}
