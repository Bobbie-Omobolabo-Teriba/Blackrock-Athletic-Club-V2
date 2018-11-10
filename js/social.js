/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));

//    (function () {
//        var cx = '009920064289361650215:auix8xgvhjk';
//        var gcse = document.createElement('script');
//        gcse.type = 'text/javascript';
//        gcse.async = true;
//        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
//        var s = document.getElementsByTagName('script')[0];
//        s.parentNode.insertBefore(gcse, s);
//    })();
//    
    
    
(function() {
    var cx = '009920064289361650215:auix8xgvhjk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
    
    

});