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
    var companyId = $('#companyid').text();
    if(companyId != '0')
    {
      var settings = {
        "url": api_url + "/companies/" +companyId,
        "method": "GET",
        "headers": {
          "Content-Type": "application/json",
          "Authorization": token
        },
      };

      $.ajax(settings).done(function (response) {
        for (prop in response) {
          $("#" + prop).val(response[prop]);
        }

        $('#logo').attr('src', response['logo']);
      }).fail(function(){
        location.href = '/companies';
      });
    }



    $('form').submit( function () {

      var formData = new FormData();
      if(companyId != '0')
      {
        formData.append('id', companyId);
      }
      formData.append('name', $('#name').val());
      formData.append('address1', $('#address1').val());
      formData.append('address2', $('#address2').val());
      formData.append('logo', $('#logo').val());
      formData.append('city', $('#city').val());
      formData.append('state', $('#state').val());
      formData.append('zip', $('#zip').val());
      formData.append('phone1', $('#phone1').val());
      formData.append('phone2', $('#phone2').val());
      formData.append('fax', $('#fax').val());
      formData.append('email', $('#email').val());
      formData.append('description', $('#description').val());
      formData.append('about_us', $('#about_us').val());
      formData.append('attachment', $('input[type=file]')[0].files[0]);

      var update_settings = {
        url: api_url + "/companies",
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
          "Authorization": token
        }
      };

      $.ajax(update_settings).done(function (response) {
        location.href = "/companies";
      });
      return false;
    } );

    $('.btn-cancel').click(function(){
      window.history.back();
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#logo').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });

  // });



});


