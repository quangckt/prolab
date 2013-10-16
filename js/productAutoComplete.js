(function($) {
$.fn.productAutoComplete=function(url,options){
 return this.each(function(){
   var self=this;
   if($(this).hasClass('autocomplete-processed')) return;
   var setData=function(e,obj,opt){
    if(obj){
      if(opt.updateProductId && obj.id)  $('#'+opt.updateProductId).val(obj.id);
      if(opt.updateUom && obj.uom_id)    $('#'+opt.updateUom).val(obj.uom_id);
      if(opt.updatePrice && obj.avgcost && opt.updatecost)  $('#'+opt.updatePrice).val(obj.avgcost);
      if(opt.showProductInfo)
         opt.showProductInfo(obj,opt);
      }
    else {
      if(opt.updateProductId && obj.id>0) $('#'+opt.updateProductId).val('');
      if(opt.updateUom && obj.uom_id)   $('#'+opt.updateUom).val('');
      if(opt.updatePrice && obj.price)  $('#'+opt.updatePrice).val('');
       }  
       
     if(opt.updateWH)
      $('#'+opt.updateWH).change(function(){ 
         opt.showProductInfo(obj,opt);
      });
      
     if(obj.uom_list && opt.updateUom){
       var u= $('#'+opt.updateUom);
        u.find("option").remove();
       $.each(obj.uom_list,function(){ 
         var o=$('<option></option>');
         o.attr('value',this.id);
          o.html(this.name);    
         u.append(o);
       });
     }
    
    var t= $(e).parents('tr').eq(0);
    if(obj.hascounter==1){
         t.find('.counter').removeClass('uneditable-input').removeAttr('readonly');
       } else 
       t.find('.counter').addClass('uneditable-input').attr('readonly','true');
  };  

  var data={source:
  function(request, response) {
    var w =-1;
     if(options.extpar!=null){
        w = $('#'+options.extpar).val();   
     }      
        $.ajax({
          url: url,
               dataType: "json",
          data: {
            term : request.term,
            w : w
          },
          success: function(data) {
            response(data);
          }
        });
    }};
  var opt={};
  opt.updateProductId=$(this).attr('rel_product_id'); 
  opt.updateUom=$(this).attr('rel_uom_id');
  opt.updatePrice=$(this).attr('rel_price');
  opt.updateWH=$(this).attr('rel_wh_id');
  
  opt.change=function(event, ui) {
        if (ui.item) setData(this,ui.item,opt);
        else {
            if (!$(this).data('valid')) {
            $(this).val('');
             setData(this,null,opt);
            }}
    $(this).data('valid', false);    
 };
 
 opt=$.extend(opt,options);
 
 return $(self).autocomplete(data,opt).live('blur', function (e) {
        if ($('.ui-autocomplete li:visible').length > 0) {
            var item = $($(".ui-autocomplete li:visible:first").data()).attr('item.autocomplete');
            $(this).val(item.value);
              setData(this,item,opt);
            $(this).data('valid', true);
        }
    }).addClass('autocomplete-processed');
 });}
})(jQuery);