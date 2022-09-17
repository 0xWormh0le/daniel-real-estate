"use strict";

jQuery(document).ready(function(){
  var api_url = $('#api_url').val();

  $('form').submit(function(){

    var email = $('#email').val();
    var password = $('#password').val();

    var settings = {
      "url": api_url + "/auth/auth",
      "method": "POST",
      "timeout": 0,
      "headers": {
        "Content-Type": "application/json"
      },
      "data": JSON.stringify({"email":email,"password": password}),
    };

    $.ajax(settings).done(function (response) {
      if(response.success == true)
      {
        if(response.user.user_type == 'Admin')
        {
          var token = response.user.token;
          localStorage.setItem('token', token);
          localStorage.setItem('userid', response.user.id);
          location.href = "/users";
        }
        else
        {
          $('.invalid-email').show();
        }
      }
    }).fail(function(jqXHR, textStatus, errorThrown) {
      $('.invalid-email').show();
    });
    return false;
  })
});
