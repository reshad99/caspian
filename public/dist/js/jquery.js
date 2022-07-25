$('.login').click(function(){
    let form = $('#login-form').serialize();

    $.ajax({
      url: '/admin/login-try',
      type: 'POST',
      data: form,
      dataType: 'json',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      beforeSend: function(){
        $('.login .button-text').css('display', 'none')
        $('.login .spinner').css('display', 'block')
      },
      success: function(data){
        $('.login').html('Daxil ol')
        console.log(data)
        if(data.status == 1)
        {
            alertify.success(data.message);
            window.location.replace('/admin/dashboard');
        }

        if(data.status == 0)
        alertify.alert(data.message).set({title: 'Giriş uğursuz oldu!'});


      },
      error: function(data){
        $('.login').html('Daxil ol')
        console.log(data)
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).closest('div').find('.input-group-text').css('border-color', 'red');
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

        });
      }
    })
  })

  $('#about_update').on('submit', function(){
    $('.spinner').css('display', 'block');
    $('.submit_text').css('display', 'none');
    let formData = new FormData($(this)[0]);

    $.ajax({
      url: '/admin/about-update',
      type: 'post',
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      cache: false,
      enctype: 'multipart/form-data',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success: function(data){
        console.log(data);
        alertify.success(data.message);
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      },
      error: function(data){
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

        });
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      }
    })
  })

  $(function () {
    // Summernote
    $('#summernote1').summernote()
    $('#summernote2').summernote()
    $('#summernote3').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })

  $(function () {

    $("#table-about").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });

    $("#table-category").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

      $("#table-privacy").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

      $("#table-product").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

      $("#table-contact").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });
  });

  $('#category_create').on('submit', function(){
    $('.spinner').css('display', 'block');
    $('.submit_text').css('display', 'none');
    $('.form-group input').css('border-color', '')
    let formData = new FormData($(this)[0]);

    $.ajax({
      url: '/admin/category-create',
      type: 'post',
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      enctype: 'multipart/form-data',
      dataType: 'json',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success: function(data){
        alertify.success(data.message);
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
        window.location.replace('/admin/categories');
      },
      error: function(data){
        console.log(data)
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
        });
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      }
    })
  })

  $('#category_form').on('submit', function(){
    $('.spinner').css('display', 'block');
    $('.submit_text').css('display', 'none');
    let form = $(this).serialize();

    $.ajax({
      url: '/admin/category-update',
      type: 'post',
      data: form,
      dataType: 'json',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success: function(data){
        alertify.success(data.message);
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      }
    })
  })

  $(function () {

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });

    $(document).on('click', '.delete', function(){
      id  = $(this).data('id');

      alertify.confirm('Silmək istədiyinizə əminsiniz?',
      function(){
        $.ajax({
          url: '/admin/category-delete',
          data: {id:id},
          type: 'post',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          success: function(data){
            alertify.success(data.message);
            $('#tr-'+id).fadeOut();
          }
        })
      },

      function(){ alertify.error('Ləğv edildi')}).set({title:"Silmək"},{labels:{ok:'Bəli', cancel: 'Xeyr'}});

    })
  });

  $('#contact_update').on('submit', function(){
    $('.spinner').css('display', 'block');
    $('.submit_text').css('display', 'none');
    let formData = new FormData($(this)[0]);

    $.ajax({
      url: '/admin/contact-update',
      type: 'post',
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      cache: false,
      enctype: 'multipart/form-data',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success: function(data){
        console.log(data);
        alertify.success(data.message);
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      },
      error: function(data){
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

        });
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      }
    })
  })

  $('input').keyup(function(){
    val = $(this).val();
    if(!val)
    {
        $(this).css('border-color', 'red')
        $(this).closest('div').find('.input-group-text').css('border-color', 'red');
    }

    else
    {
        $(this).css('border-color', '')
        $(this).closest('div').find('.input-group-text').css('border-color', '');
    }


  })

  $('.logout').click(function(){
    url = $(this).data('url');
    alertify.confirm('Çıxış etmək istədiyinizə əminsiniz?',
      function(){
          window.location.replace('/admin/logout')
      },

      function(){ alertify.error('Ləğv edildi')}).set({title:"Silmək"},{labels:{Ok:'Bəli', cancel: 'Xeyr'}});
  })


  $('#privacy_update').on('submit', function(){
    $('.spinner').css('display', 'block');
    $('.submit_text').css('display', 'none');
    let formData = new FormData($(this)[0]);

    $.ajax({
      url: '/admin/privacy-update',
      type: 'post',
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      cache: false,
      enctype: 'multipart/form-data',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success: function(data){
        alertify.success(data.message);
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      },
      error: function(data){
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

        });
        $('.spinner').css('display', 'none');
        $('.submit_text').css('display', 'block');
      }
    })
  })

  $(function(){
    $('#photo').change(function(){
      var input = this;
      var url = $(this).val();
      var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
       {
          var reader = new FileReader();
          reader.onload = function (e) {
             $('#img').attr('src', e.target.result);
          }
         reader.readAsDataURL(input.files[0]);
      }
      else
      {
        $('#img').attr('src', '/assets/no_preview.png');
      }
    });

    $('#product_update').on('submit', function(){
        $('.spinner').css('display', 'block');
        $('.submit_text').css('display', 'none');
        let formData = new FormData($(this)[0]);

        $.ajax({
          url: '/admin/product-update',
          type: 'post',
          data: formData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          enctype: 'multipart/form-data',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          success: function(data){
            alertify.success(data.message);
            $('.spinner').css('display', 'none');
            $('.submit_text').css('display', 'block');
          },
          error: function(data){
            $.each(data.responseJSON.errors, function(_key, e){
              $('#'+_key).css('border-color', 'red')
              $('#'+_key).val('')
              $('#'+_key).attr('placeholder', e[0])
              $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

            });
            $('.spinner').css('display', 'none');
            $('.submit_text').css('display', 'block');
          }
        })
      })

    });

    $(function () {

        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
        })

        $(document).on('click', '.delete', function(){
          id  = $(this).data('id');

          alertify.confirm('Silmək istədiyinizə əminsiniz?',
          function(){
            $.ajax({
              url: '/admin/product-delete',
              data: {id:id},
              type: 'post',
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              success: function(data){
                alertify.success(data.message);
                $('#tr-'+id).fadeOut();
              }
            })
          },

          function(){ alertify.error('Ləğv edildi')}).set({title:"Silmək"},{labels:{ok:'Bəli', cancel: 'Xeyr'}});

        })
      });

      $('#product_form').on('submit', function(){
        $('.spinner').css('display', 'block');
        $('.submit_text').css('display', 'none');
        let formData = new FormData($(this)[0]);

        $.ajax({
          url: '/admin/product-create',
          type: 'post',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          enctype: 'multipart/form-data',
          dataType: 'json',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          success: function(data){
            alertify.success(data.message);
            $('.spinner').css('display', 'none');
            $('.submit_text').css('display', 'block');
            window.location.replace('/admin/products');
          },
          error: function(data){
            $.each(data.responseJSON.errors, function(_key, e){
              $('#'+_key).css('border-color', 'red')
              $('#'+_key).val('')
              $('#'+_key).attr('placeholder', e[0])
              $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

            });
            $('.spinner').css('display', 'none');
            $('.submit_text').css('display', 'block');
          }
        })
      })
