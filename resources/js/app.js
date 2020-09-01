require('./bootstrap');

var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax({
    url: 'http://127.0.0.1:8000/api/students',
    method: 'GET',

    success: function(data) {
      var students = data.students;
      var source = $('#entry-template').html();
      var template = Handlebars.compile(source);

      for (var i = 0; i < students.length; i++) {

        var thisStudent = students[i];

        var context = thisStudent;
        var html = template(context);

        $('.div').append(html);

        console.log(html);
      }

    },

    error: function() {
      alert('errore');
    },

  });
});
