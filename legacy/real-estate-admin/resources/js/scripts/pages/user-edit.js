$(function () {

  var api_url = $('#api_url').val();

  var token = localStorage.getItem('token');

  // var auth_settings = {
  //   "url": api_url + "/auth/auth",
  //   "method": "POST",
  //   "timeout": 0,
  //   "headers": {
  //     "Content-Type": "application/json"
  //   },
  //   "data": JSON.stringify({"email":"joe826@gmail.com","password":"123"}),
  // };

  // $.ajax(auth_settings).done(function (auth_response) {
  //   var token = auth_response.user.token;
    var userId = $('#userid').text();
    if(userId != '0')
    {
      var settings = {
        "url": api_url + "/users/" + userId,
        "method": "GET",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json",
          "Authorization": token
        },
      };
      $.ajax(settings).done(function (response) {

        for (prop in response) {
          $("#" + prop).val(response[prop])
        }

        $('#avatar').attr('src', response['image']);
      }).fail(function(){
        location.href = '/users';
      });
    }


  $('form').submit( function () {

    var formData = new FormData();

    if(userId != '0')
    {
      formData.append('id', userId);
    }
    formData.append('email', $('#email').val());
    formData.append('company_id', $('#company_id').val());
    formData.append('user_type', $('#user_type').val());
    formData.append('first_name', $('#first_name').val());
    formData.append('last_name', $('#last_name').val());
    formData.append('description', $('#description').val());
    formData.append('organization', $('#organization').val());
    formData.append('phone', $('#phone').val());
    formData.append('facebook', $('#facebook').val());
    formData.append('twitter', $('#twitter').val());
    formData.append('linkedin', $('#linkedin').val());
    formData.append('instagram', $('#instagram').val());
    formData.append('website', $('#website').val());
    formData.append('image', $('input[type=file]')[0].files[0]);


    var acc_settings = {
      url: api_url + "/users",
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      headers: {
        "Authorization": token
      }
    };

    $.ajax(acc_settings).done(function (response) {
      location.href = "/users";
    });
    return false;
   } );

  $('#pwd_save').click( function () {
    var update_settings = {
      "url": api_url + "/users/"+userId+"/change-pwd",
      "method": "POST",
      "headers": {
        "Content-Type": "application/json",
        "Authorization": token
      },
      "data": JSON.stringify({
        "newPwd": $('#newPwd').val()
      })
    };

    $.ajax(update_settings).done(function (response) {
      location.href = "/users";
    })
    .fail(function (jqXHR,textStatus,errorThrown){
      alert("Please type password correctly!");
    });
  } );



  $('.btn-cancel').click(function(){
    window.history.back();
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#avatar').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
});



  // jQuery(document).ready(function(){

