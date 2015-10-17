jQuery(document).ready(function($) {

          var feed = new Instafeed({
         //   get: 'tagged',
          //  tagName: 'awesome',
            get: 'user',
            userId : 2057141770,
            accessToken: '2057141770.467ede5.1163285b86a1463c9fd6896981b8b47d',
            clientId: '',
            template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
            limit : 20,
             after: function(){
                jQuery('#instafeed').smoothDivScroll({
                  manualContinuousScrolling: true,
                    autoScrollingDirection: "endlessLoopLeft",
                    autoScrollingInterval: 25,
                    touchScrolling: true,
                    autoScrollingMode: "onStart"
                });
            
        }
            
    });
        feed.run();
       
});