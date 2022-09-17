"use strict";

jQuery(document).ready(function(){

  var api_url = $('#api_url').val();
  var token = localStorage.getItem('token');
  if( token == null)
  {
    location.href = '/login';
    return;
  }

  var settings = {
    "url": api_url + "/auth/check-token",
    "method": "GET",
    "timeout": 0,
    "headers": {
      "Content-Type": "application/json",
      "authorization": token
    },
  };

  $.ajax(settings).done(function (response) {
    $('.absolute-center').hide();

  }).fail(function(){
    location.href = '/login';
  });

  var userId = localStorage.getItem('userid');
  var nav_settings = {
    "url": api_url + "/users/" + userId,
    "method": "GET",
    "timeout": 0,
    "headers": {
      "Content-Type": "application/json",
      "Authorization": token
    },
  };
  $.ajax(nav_settings).done(function (response) {

    $('.user-name').text(response['first_name'] + ' ' + response['last_name']);
    $('.round').attr('src', response['image']);
  }).fail(function(){

  });


  $('#logout').click(function(){
    localStorage.removeItem('token');
    localStorage.removeItem('userid');
    $('.absolute-center').show();
    location.href = '/login';
  });

});
