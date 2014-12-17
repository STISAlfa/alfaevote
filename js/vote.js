/* This web is developed by STISAlfa's Member :
Name        : Thosan Girisona S
Coder-ID    : blank123
University  : Statistics Institute Of Indonesia
Year        : 2014

All Right Reserved
Copyright 2014 TGS  

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function($){
    var currentTabIndex = 0;
    var maxTabIndex = $('[tabindex]').length;
    var i=1;

      $(document).keydown(function(e) {
        var kc = e.keyCode;
        if (kc === 40 || kc === 38) {
            var newIndex = parseInt(currentTabIndex) + (kc === 40 ? 1 : -1);
            if (newIndex < 1)
                newIndex = maxTabIndex;
            else if (newIndex > maxTabIndex)
                newIndex = 1;
            for(i=1;i<=maxTabIndex;i++){
                if (i!=newIndex) $('[tabindex=' + newIndex + ']').css("border","none");
            }    
            $('[tabindex=' + newIndex + ']').css("border","1px solid red");
            return false;
        }
        // return (kc == VK;
    });
    
    $('[tabindex]').css(function() {
        currentTabIndex = $(this).attr('tabindex');
    });
    
    $('[tabindex="1"]').css("border","1px solid red");
});
