
jQuery(function($){
    var currentTabIndex = 0;
    var maxTabIndex = $('[tabindex]').length;
    
      $(document).keydown(function(e) {
        var kc = e.keyCode;
        if (kc === 40 || kc === 38) {
            var newIndex = parseInt(currentTabIndex) + (kc === 40 ? 1 : -1);
            if (newIndex < 1)
                newIndex = maxTabIndex;
            else if (newIndex > maxTabIndex)
                newIndex = 1;
            $('[tabindex=' + newIndex + ']').focus();
            return false;
        }
        // return (kc == VK;
    });
    
    $('[tabindex]').focus(function() {
        currentTabIndex = $(this).attr('tabindex');
    });
    
    $('[tabindex="1"]').focus();
});

