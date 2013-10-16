
var Prolab = Prolab || { 'settings': {}, 'behaviors': {}, 'themes': {}, 'locale': {} };

/**
 * Set the variable that indicates if JavaScript behaviors should be applied
 */
Prolab.jsEnabled = document.getElementsByTagName && document.createElement && document.createTextNode && document.documentElement && document.getElementById;

/**
 * Attach all registered behaviors to a page element.
 *
 * Behaviors are event-triggered actions that attach to page elements, enhancing
 * default non-Javascript UIs. Behaviors are registered in the Prolab.behaviors
 * object as follows:
 * @code
 *    Prolab.behaviors.behaviorName = function () {
 *      ...
 *    };
 * @endcode
 *
 * Prolab.attachBehaviors is added below to the jQuery ready event and so
 * runs on initial page load. Developers implementing AHAH/AJAX in their
 * solutions should also call this function after new page content has been
 * loaded, feeding in an element to be processed, in order to attach all
 * behaviors to the new content.
 *
 * Behaviors should use a class in the form behaviorName-processed to ensure
 * the behavior is attached only once to a given element. (Doing so enables
 * the reprocessing of given elements, which may be needed on occasion despite
 * the ability to limit behavior attachment to a particular element.)
 *
 * @param context
 *   An element to attach behaviors to. If none is given, the document element
 *   is used.
 */
Prolab.attachBehaviors = function(context) {
  context = context || document;
  if (Prolab.jsEnabled) {
    // Execute all of them.
    jQuery.each(Prolab.behaviors, function() {
      // console.log(this); 
      this(context);
    });
  }
};

/**
 * Encode special characters in a plain-text string for display as HTML.
 */
Prolab.checkPlain = function(str) {
  str = String(str);
  var replace = { '&': '&amp;', '"': '&quot;', '<': '&lt;', '>': '&gt;' };
  for (var character in replace) {
    var regex = new RegExp(character, 'g');
    str = str.replace(regex, replace[character]);
  }
  return str;
};


/**
 * Wrapper around encodeURIComponent() which avoids Apache quirks (equivalent of
 * Prolab_urlencode() in PHP). This function should only be used on paths, not
 * on query string arguments.
 */
Prolab.encodeURIComponent = function (item, uri) {
  uri = uri || location.href;
  item = encodeURIComponent(item).replace(/%2F/g, '/');
  return (uri.indexOf('?q=') != -1) ? item : item.replace(/%26/g, '%2526').replace(/%23/g, '%2523').replace(/\/\//g, '/%252F');
};



// Global Killswitch on the <html> element
if (Prolab.jsEnabled) {
  // Global Killswitch on the <html> element
  $(document.documentElement).addClass('js');
  // 'js enabled' cookie
  document.cookie = 'has_js=1; path=/';
  // Attach all behaviors.
  $(document).ready(function() {
     Prolab.attachBehaviors(this);
  });
}

Prolab.behaviors.alertBlock=function(){
$('.alert-block').addClass('modal');    
var time= setTimeout(function(){
    $('div.modal.alert-block').fadeOut('slow');    
    },5500);
}

Prolab.behaviors.print=function(content){
$('.link-print:not(.link-print-procesed)',content).each(function(){
    $(this).click(function(){
     var opt= eval('(' + $(this).attr('opt') + ')');    
    //$('.printableArea').print(opt);
      if (window.print()){ 
                window.close(); 
        }else{ 
                window.close(); 
        } 
     return false;           
    }).addClass('link-print-procesed');    
    }   
); 
}

Prolab.behaviors.openPopup=function(content){
 $('.popup-full:not(.popup-full-procesed)',content).each(function(){
     $(this).click(function(e){
     e.preventDefault(); 
     newWindow = window.open($(this).attr('href'),'report','scrollbars=no,width='+screen.width+',height='+screen.height+',titlebar=no,location=no,left=0,top=0,status=no,toolbar=no,fullscreen=yes');
  	 newWindow.creator=self;
  	 newWindow.focus(); 
        return false;    
     }).addClass("popup-full-procesed"); 
 });  
}


Prolab.behaviors.leftMenu=function(content){
 $('#left-menu li.active').each(function(){
    $(this).parents('div.accordion-body').addClass('in').attr('style',"height: auto;");
 });  
}




Prolab.wait = function(f,m){
    if(f==false) $('#wait').remove();
    else {
        if(m==undefined)  m= "<div class='wait loading waiting '><span class='alert-info'>Chờ xử lý ...</span></div>";  
    $('body').append($("<div id='wait'></div>").addClass('modal').append(m));
    }
}
