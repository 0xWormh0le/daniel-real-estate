$(function () {
  var api_url = $('#api_url').val();

  var token = localStorage.getItem('token');
  // var settings = {
  //   "url": api_url + "/auth/auth",
  //   "method": "POST",
  //   "timeout": 0,
  //   "headers": {
  //     "Content-Type": "application/json"
  //   },
  //   "data": JSON.stringify({"email":"joe826@gmail.com","password":"123"}),
  // };

  // $.ajax(settings).done(function (response) {
  //   var token = response.user.token;
    var datatable = $('#table').DataTable({
    "lengthMenu": [3, 5, 10],
    "processing": true, // for show progress bar
    "filter": false, // this is for disable filter (search box)
    "orderMulti": false, // for disable multiple column at once
    "ajax": {
      "url": api_url + '/companies',
      "type": "GET",
      "datatype": "json",
      "dataSrc": '',
      "headers":{
        "Authorization": token
      }
    },
    "columns": [
      { "data": 'id', "name": 'id' },
      { "data": 'name', "name": 'name' },
      { "data": 'address1', "name": 'address1' },
      { "data": 'address2', "name": 'address2' },
      { "data": 'city', "name": 'city' },
      { "data": 'state', "name": 'state' },
      { "data": 'zip', "name": 'zip' },
      { "data": null, render: function (data) {
        return '<a href="/company-edit/' + data.id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"><i class="feather icon-edit"></i></a>\
        <button class="btn btn-hover-danger btn-icon btn-pill btn-delete" title="Delete" name='+data.id+'><i class="feather icon-trash-2"></i></button>'
      }}
    ]
  });


  $('body').on('click', '.btn-delete', function() {
    var userId = $(this).attr('name');

    var tr = $(this).parentsUntil('tr').parent()[0];
    var delete_settings = {
      "url": api_url + "/companies/"+userId,
      "method": "DELETE",
      "headers": {
        "Content-Type": "application/json",
        "Authorization": token
      }
    };

    $.ajax(delete_settings).done(function (response) {
      $(tr).addClass('kt-datatable__row--active');
      datatable.rows('.kt-datatable__row--active').remove().draw(false);
    })

  });

  // });

});
