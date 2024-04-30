
jQuery.fn.alertMethod = function() { 
    return this.each(function() { 
       alert('GeeksforGeeks in "' + $(this).prop("tagName") + '"tag'); 
    }); 
 };

 
/*
jQuery.fn.warning = function(){
    return this.each(function(){
        alert('TagName:'+ $(this).prop("tagName") + 'tag');
    });
}
*/