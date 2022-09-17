$(function () {

  var api_url = $('#api_url').val();

  var token = localStorage.getItem('token');
  // var password = localStorage.getItem('password');
  // var settings = {
  //   "url": api_url + "/auth/auth",
  //   "method": "POST",
  //   "timeout": 0,
  //   "headers": {
  //     "Content-Type": "application/json"
  //   },
  //   "data": JSON.stringify({"email": email, "password": password}),
  // };

  // $.ajax(settings).done(function (response) {
    // var token = response.user.token;
    var datatable = $('#table').DataTable({
    "lengthMenu": [3, 5, 10],
    "processing": true, // for show progress bar
    "filter": false, // this is for disable filter (search box)
    "orderMulti": false, // for disable multiple column at once
    "ajax": {
      "url": api_url + '/users',
      "type": "GET",
      "datatype": "json",
      "dataSrc": '',
      "headers":{
        "Authorization": token
      }
    },
    "columns": [
      { "data": 'id', "name": 'id' },
      { "data": 'email', "name": 'email' },
      { "data": 'first_name', "name": 'first_name' },
      { "data": 'last_name', "name": 'last_name' },
      { "data": 'user_type', "name": 'user_type' },
      { "data": 'company_id', "name": 'company_id' },
      { "data": null, render: function (data) {
        if(data.id == localStorage.getItem('userid'))
        {
          return '<a href="/user-edit/' + data.id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"><i class="feather icon-edit"></i></a>'
        }
        return '<a href="/user-edit/' + data.id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"><i class="feather icon-edit"></i></a>\
        <button class="btn btn-hover-danger btn-icon btn-pill btn-delete" title="Delete" name='+data.id+'><i class="feather icon-trash-2"></i></button>'
      }}
    ]

  });

  $('body').on('click', '.btn-delete', function() {
    var userId = $(this).attr('name');

    if(userId == localStorage.getItem('userid'))
    {
      return;
    }

    var tr = $(this).parentsUntil('tr').parent()[0];
    var delete_settings = {
      "url": api_url + "/users/"+userId,
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
    // swal.fire({
    //   title: 'Are you sure?',
    //   text: "You won't be able to revert this!",
    //   type: 'warning',
    //   showCancelButton: true,
    //   confirmButtonText: 'Yes, delete it!'
    // }).then(function(result) {
    //   if (result.value) {

    //   }
    // });
// });

  });

  // $('#table tbody').on( 'click', 'tr', function () {
  //     if ( $(this).hasClass('selected') ) {
  //         $(this).removeClass('selected');
  //     }
  //     else {
  //         datatable.$('tr.selected').removeClass('selected');
  //         $(this).addClass('selected');
  //     }

  //     var count = datatable.rows('.selected').data().length;

  //     if (count > 0) {
  //       $('#editRow').collapse('show');
  //       $('#deleteRow').collapse('show');
  //     } else {
  //       $('#editRow').collapse('hide');
  //       $('#deleteRow').collapse('hide');
  //     }
  // } );



});
