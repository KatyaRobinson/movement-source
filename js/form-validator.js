
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[id='cust-contact']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      phone: {
            required: true,
            phoneUS: true
                },
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      }
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your firstname",
      phone: "Please enter your phone number",
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {

  var name = $("#name").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var message = $("#cust-message").val();

  var date = DATE;
  var time = TIME;

  var dataString = 'name=' + name + '&phone=' + phone + '&email=' + email + '&message=' + message + '&date=' + date + '&time=' + time;
  $.ajax({
    url: 'appt-request.php',
    type: 'POST',
    data: dataString,
    success: function() {
     $("#customer-info").css('opacity', '0');
     $("#selected-options").append("<br />Your request has been sent <br />");
     $("#selected-options").append("<strong>Name: </strong>" + name + "<br/>");
     $("#selected-options").append("<strong>Phone: </strong>" + phone + "<br/>");
     $("#selected-options").append("<strong>Email: </strong>" + email + "<br/>");
     if(!$(message)){
     $("#selected-options").append("Message: " + message + "<br/>");
   }
     $("#selected-options").append("<br /><p>We will be in touch soon!</p>");
    },
    error: function(responseData){
      console.log('Ajax request not received!');
    }
  });
  //clear inputs after submitting
  $("#customer-info").find('input').val('');
  $("#customer-info").find('textarea').val('');
  return false; // prevent redirecting
  updateCalendar();
    }
  });
});
