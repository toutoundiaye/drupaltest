(function($, Drupal){
    'use strict';
    $(document).ready(function() {
        var uri = '/api/promotion'
$.ajax({
    url: uri,
    type: 'GET',
    data: {
          'message[]': message,
          'error': error,
        },
    dataType: 'json',
    
    success: function (results) {

    }

    



})
})
});