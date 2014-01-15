$(function() {
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
    var address = $("input#address").val();
		if (address == "") {
      $("div#address_error").show();
      $("input#address").focus();
      return false;
    }
    var postcode = $("input#postcode").val();
		if (postcode == "") {
      $("div#post_error").show();
      $("input#postcode").focus();
      return false;
    }
		var pass0 = $("input#pass0").val();
		if (pass0 == "") {
      $("div#pass0_error").show();
      $("input#pass0").focus();
      return false;
    }
    var pass1 = $("input#pass1").val();
		if (pass1 == "") {
      $("div#pass1_error").show();
      $("input#pass1").focus();
      return false;
    }
    
		
		var dataString = 'name='+ name + '&email=' + email + '&address=' + address + '&postcode=' + postcode + '&pass0=' + pass0;
		//alert (dataString);return false;
        		
		$.ajax({
      type: "POST",
      url: "bin/process.php",
      data: dataString,
      cache: false,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h2 style='text-align:left'>Contact Form Submitted!</h2>")
        .append("<p>We will be in touch soon.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img id='checkmark' src='images/check.png' />");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});
