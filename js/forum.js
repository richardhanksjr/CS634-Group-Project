
$(document).ready(function () {

$('#post-form').on('submit',function( event ) {

    event.preventDefault();
    event.stopPropagation();
    
  $('#success_message').show();
  $('form').get(0).reset();
  $('#create-button').trigger('click');
  
});

});