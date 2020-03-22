
define(['jquery','core/log','core/ajax'], function($, Log, Ajax) {
 
    return {
        init: function() {
            $(".mood-results").click(function() {
               Ajax.call([{
                   methodname: 'block_mood_checker_get_mood_results',
                   args:{
                     graphictype: 'testing'  
                   },
                   done:function(response){
                        var region = $('[data-block="mood_checker"]').find('.result');
                        region.replaceWith(response.graphic);
                        Log.debug(response.graphic);
                    },
                    fail:function(reason) {
                        Log.error(reason);
                    }                
            }]);
        
    });
    }
}
});