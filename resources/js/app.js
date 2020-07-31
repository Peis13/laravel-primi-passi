require('./bootstrap');
import 'bootstrap';
var $ = require('jquery');

$(document).ready(function() {

  $('.domanda').click(function() {
    var attrDomanda = $(this).attr('data-index');
    $(this).siblings('.risposta').each(function() {

      if ($(this).attr('data-index') === attrDomanda) {
        $(this).slideToggle();
      } else {
        $(this).slideUp();
      }
    })
  })
});
