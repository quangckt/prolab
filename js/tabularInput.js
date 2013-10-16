(function($) {
$.fn.tabularInput = function(settings) {
		// initialize defaults
		var defaults = {
		  lastline:0,
          emptyline:'',
          autoAddLine:true
          };
          
		settings = $.extend(defaults, settings);
          var self = this;
          var subtotal=function(q,p,t){
                  var qv=0,pv=0;
                  if(q.length>0) qv=q.autoNumericGet();
                  if(p.length>0) pv=p.autoNumericGet();
                  if(isNaN(qv)) qv=0; if(isNaN(pv)) pv=0;
                  if(t!=undefined) t.autoNumericSet(qv*pv);
                  grandtotal();  
                        
          };  
          
          var grandtotal=function(){
               var g=0;
                $(self).find(' .subtotal').each(function(){ 
                   g += $(this).autoNumericGet()*1;
                   });
            $(self).find('.grandtotal').autoNumericSet(g);                   
                
          }
                
          var deleteLine=function(e){ 
                if( confirm('Bạn có muốn xóa dòng này không?'))
                $(e).parents('tr').detach();
                $('.product-info').hide();
                grandtotal();                  
                return false;            
          };
          var addLine=function(e){
            settings.lastline++;
            var l= 'n'+settings.lastline;
            $(self).find('tbody').append(settings.emptyline.replace(/idRep/g,'n'+settings.lastline));
            $(self).find('tbody .products:last-child','tbody .firstfocus:last-child').focus().select();
            $(self).find('tbody .firstfocus:last-child').focus().select();
            Prolab.attachBehaviors();            
          };
          
          var processline=function(line){
            $(line).addClass('handlerline');  
            var q=$(line).find('.qty'),p=$(line).find('.price'),t=$(line).find('.subtotal'),i=$(line).find('.products');
            q.change(function(){subtotal(q,p,t)});
            p.change(function(){subtotal(q,p,t)});
            $(line).find('.remove-line').click(function(){
                return deleteLine(this);
            });
          }  
        $(self).find('.add-line:not(.processed-addline)').each(function(){
            $(this).addClass('processed-addline');
             $(this).click(function(){
                 addLine(this);
              });
         });
      
  
  
      return  self.each(function() {
           
            $(this).find(' tbody.lines tr:not(.handlerline)').each(function(){
                processline(this);
            });
        }
        
        );
    };
    
})(jQuery);    
