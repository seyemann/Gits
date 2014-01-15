$(function() {
  // restrict phone input
  $("input#phone").keypress(function(key) {
  if(key.charCode < 48 || key.charCode > 57) return false;
  });
			
  // restrict surname input
  // $("input#name").keypress(function(key) {
  // if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
  //});
  
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var name = $("input#name").val();
		if (name == "") {
      $("div#name_error").show();
      $("input#name").focus();
      return false;
    }
        validRegExp = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
		var email = $("input#email").val();
		if (email.search(validRegExp) == -1) 
    {
      $("div#email_error").show();
      $("input#email").focus();
      return false;
    }
    var phone = $("input#phone").val();
		if (phone == "") {
      $("div#phone_error").show();
      $("input#phone").focus();
      return false;
    }
    var address = $("input#address").val();
		if (address == "") {
      $("div#address_error").show();
      $("input#address").focus();
      return false;
    }
    var postcode = $("input#postcode").val();
		if (postcode == "") {
      $("div#postcode_error").show();
      $("input#postcode").focus();
      return false;
    }
		var message = $("textarea#message").val();
		if (message == "") {
      $("div#message_error").show();
      $("textarea#message").focus();
      return false;
    }
    
		var subbox = $("input#subbox:checked").val();
    
		
		var dataString = 'name='+ name + '&email=' + email +  '&phone=' + phone + '&address=' + address + '&postcode=' + postcode + '&message=' + message + '&subbox=' + subbox;
		//alert (dataString);return false;
        		
		$.ajax({
      type: "POST",
      url: "MI ComputSolutions_files/process.php",
      data: dataString,
      cache: false,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h2 style='text-align:left'>Contact Form Submitted!</h2>")
        .append("<p>We will be in touch soon.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img id='checkmark' src='MI ComputSolutions_files/check.png' />");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});
