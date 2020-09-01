require('./bootstrap');

var $ = require( "jquery" );

$(document).ready(function() {
  $.ajax({
    url: 'http://127.0.0.1:8000/api/students',
    method: 'GET',

    success: function(data) {
      console.log(data);
    },

    error: function() {

    },

  });
});
