
$.ajaxSetup({headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')}});
active = 'active';
function load_data(table, search, offset)
{
    $.ajax({
            url: '/admin/load-'+table,
            type: 'post',
            data: {table:table, search:search, offset:offset},
            dataType: 'json',
            cache: false,
            success: function(data){
                if(data.status == 1)
                {   
                    if(data.table == 'artists')
                    {

                        $.each(data.info, function(_key, a){
                            $('.append_div').append(`
                            <tr id="tr-`+a.id+`">
                            <!--begin::Category=-->
                            <td>
                              <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="/admin/artists/`+a.id+`/edit" class="symbol symbol-50px">
                                  <span class="symbol-label" style="background-image:url('`+a.photo+`');"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                  <!--begin::Title-->
                                  <a href="/admin/artists/`+a.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+a.name+`</a>
                                  <!--end::Title-->
                                </div>
                              </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                            <a href="/admin/`+data.table+`/`+a.id+`/edit" >
                              <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                               <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                                </svg></span>
                            </a>
                            <!--end::Svg Icon-->
            
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                                <a href="javascript:void(0)" data-id="`+a.id+`" class="delete" data-table="`+data.table+`">
                                  <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                  <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                  </svg></span>
                                </a>
                            <!--end::Svg Icon-->
                          </tr>`)
                       
                    })
                    }

                    else if(data.table == 'videos')
                    {
                      $.each(data.info, function(_key, v){
                        $('.append_div').append(`
                        <tr id="tr-`+v.id+`">
                        <!--begin::Price=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+v.artist.name+`</span>
                      </td>
                      <!--end::Price=-->
                      <!--begin::Price=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+v.link+`</span>
                      </td>
                      <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+data.table+`/`+v.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+v.id+`" class="delete" data-table="`+data.table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }

                    else if(data.table == 'about-details')
                    {
                      $.each(data.info, function(_key, a){
                        $('.append_div').append(`
                        <tr id="tr-`+a.id+`">
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+a.title+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+a.text+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+data.table+`/`+a.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+a.id+`" class="delete" data-table="`+data.table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }

                    else if(data.table == 'events')
                    {
                      $.each(data.info, function(_key, e){
                        $('.append_div').append(`
                        <tr id="tr-`+e.id+`">
                        <!--begin::Category=-->
                        <td>
                          <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="/admin/events/`+e.id+`/edit" class="symbol symbol-50px">
                              <span class="symbol-label" style="background-image:url('`+e.photo+`');"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                              <!--begin::Title-->
                              <a href="/admin/events/`+e.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+e.title+`</a>
                              <!--end::Title-->
                            </div>
                          </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+e.artist+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+e.date+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+data.table+`/`+e.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+e.id+`" class="delete" data-table="`+data.table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }
                    

                    else if(data.table == 'songs')
                    {
                      var checked;
                      $.each(data.info, function(_key, s){
                        if (s.top == true) 
                        {
                          checked = 'checked';  
                        }
                        else
                        {
                          checked = '';
                        }
                        $('.append_div').append(`
                        <tr id="tr-`+s.id+`">
                        <!--begin::Category=-->
                          <td>
                            <div class="d-flex align-items-center">
                              <!--begin::Thumbnail-->
                              <a href="/admin/songs/`+s.id+`/edit" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url('`+s.photo+`');"></span>
                              </a>
                              <!--end::Thumbnail-->
                              <div class="ms-5">
                                <!--begin::Title-->
                                <a href="/admin/songs/`+s.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+s.name+`</a>
                                <!--end::Title-->
                              </div>
                            </div>
                          </td>
                        <!--end::Category=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+s.artist.name+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <!--begin::Input-->
                          <label class="form-check d-block form-switch form-check-custom form-check-solid">
                            <input class="form-check-input top_check" type="checkbox" name="excise" data-id="`+s.id+`" `+checked+` style="border-color: red;">
                            <span class="form-check-label fw-bold text-muted"></span>
                          </label>
                          <!--end::Input-->
                        </td>
                        <!--end::Price=-->
                          <!--begin::Action=-->
                          <td class="text-end">
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                          <a href="/admin/`+data.table+`/`+s.id+`/edit" >
                            <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                              <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                              </svg></span>
                          </a>
                          <!--end::Svg Icon-->
          
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                              <a href="javascript:void(0)" data-id="`+s.id+`" class="delete" data-table="`+data.table+`">
                                <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                </svg></span>
                              </a>
                          <!--end::Svg Icon-->
                        </tr>
                        `)
                      })
                    }

                    else if(data.table == 'categories')
                    {
                      $.each(data.info, function(_key, c){
                        $('.append_div').append(`
                        <tr id="tr-`+c.id+`">
                        <!--begin::Category=-->
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-5">
                              <!--begin::Title-->
                              <a href="/admin/`+data.table+`/`+c.id+`" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+c.name+`</a>
                              <!--end::Title-->
                            </div>
                          </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+data.table+`/`+c.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+c.id+`" class="delete" data-table="`+table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }
                   
                    active = 'active';
                    
                }
                else
                {
                    active = 'inactive';
                    $('.no-data').css('display', 'block');
                    $('.loading').css('display', 'none');
                }
            }
        })
}


    
    table = $('table').data('table');
    offset = 10;
    search = $('.search').val()
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() > $('#kt_content_container').height() && active == 'active') 
        {
            $('.loading').css('display', 'block');
            active = 'inactive';
            load_data(table, search, offset);
            offset = offset + 5;
        }
    });

    $('.search').keyup(function(){
      $('.no-data').css('display', 'none');
      $('.loading').css('display', 'block');
      $('.append_div').html('')
      active = 'active';
      search = $(this).val();
      table = $(this).data('table');

      if(active == 'active')
      {
        $.ajax({
        url: "/admin/"+table+"/search",
        type: "post",
        dataType: 'json',
        data: {search:search},
        cache: false,
        success: function(data){
            if(data.info != '')
            {
                $('.no-data').css('display', 'none');
                $('.append_div').html('')
                 if(table == 'payments')
                {
                  $.each(data.info, function(_key, p){
                    $('.append_div').append(`  <!--begin::Table row-->
                    <tr id="tr-`+p.id+`">
      
                      <!--begin::name=-->
                      <td class="text-start pe-0">
                        <span class="fw-bolder text-dark">`+p.fullname+`</span>
                      </td>
                      <!--end::name=-->
      
                       <!--begin::phone=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+p.phone+`</span>
                      </td>
                      <!--end::phone=-->
      
                      <!--begin::part_number=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+p.email+`</span>
                      </td>
                      <!--end::part_number=-->
      
                      <!--begin::card_number=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+p.card_no+`</span>
                      </td>
                      <!--end::card_number=-->
      
      
                      <!--begin::total_price=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+p.total_price+`</span>
                      </td>
                      <!--end::total_price=-->
      
                      <td class="text-center pe-0">
                        <a href="/admin/payments/`+p.id+`" ><i class="fa fa-eye" style="font-size: 20px" aria-hidden="true"></i>
                        </a>
                      </td>
      
                    </tr>
                    <!--end::Table row-->`)
                                })
                }
                else if(table == 'artists')
                {

                    $.each(data.info, function(_key, a){
                          $('.append_div').append(`
                          <tr id="tr-`+a.id+`">
                          <!--begin::Category=-->
                          <td>
                            <div class="d-flex align-items-center">
                              <!--begin::Thumbnail-->
                              <a href="/admin/artists/`+a.id+`/edit" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url('`+a.photo+`');"></span>
                              </a>
                              <!--end::Thumbnail-->
                              <div class="ms-5">
                                <!--begin::Title-->
                                <a href="/admin/artists/`+a.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+a.name+`</a>
                                <!--end::Title-->
                              </div>
                            </div>
                          </td>
                          <!--end::Category=-->
                          <!--begin::Action=-->
                          <td class="text-end">
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                          <a href="/admin/`+table+`/`+a.id+`/edit" >
                            <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                              <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                              </svg></span>
                          </a>
                          <!--end::Svg Icon-->
          
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                              <a href="javascript:void(0)" data-id="`+a.id+`" class="delete" data-table="`+table+`">
                                <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                </svg></span>
                              </a>
                          <!--end::Svg Icon-->
                        </tr>`)
                          
                      })
                }

                else if(table == 'videos')
                    {
                      $.each(data.info, function(_key, v){
                        $('.append_div').append(`
                        <tr id="tr-`+v.id+`">
                        <!--begin::Price=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+v.artist.name+`</span>
                      </td>
                      <!--end::Price=-->
                      <!--begin::Price=-->
                      <td class="text-center pe-0">
                        <span class="fw-bolder text-dark">`+v.link+`</span>
                      </td>
                      <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+table+`/`+v.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+v.id+`" class="delete" data-table="`+table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }

                    else if(table == 'about-details')
                    {
                      $.each(data.info, function(_key, a){
                        $('.append_div').append(`
                        <tr id="tr-`+a.id+`">
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+a.title+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+a.text+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+table+`/`+a.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+a.id+`" class="delete" data-table="`+table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }

                    else if(table == 'songs')
                    {
                      var checked;
                      $.each(data.info, function(_key, s){
                        if (s.top == true) 
                        {
                          checked = 'checked';  
                        }
                        else
                        {
                          checked = '';
                        }
                        $('.append_div').append(`
                        <tr id="tr-`+s.id+`">
                        <!--begin::Category=-->
                          <td>
                            <div class="d-flex align-items-center">
                              <!--begin::Thumbnail-->
                              <a href="/admin/songs/`+s.id+`/edit" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url('`+s.photo+`');"></span>
                              </a>
                              <!--end::Thumbnail-->
                              <div class="ms-5">
                                <!--begin::Title-->
                                <a href="/admin/songs/`+s.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+s.name+`</a>
                                <!--end::Title-->
                              </div>
                            </div>
                          </td>
                        <!--end::Category=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+s.artist.name+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <!--begin::Input-->
                          <label class="form-check d-block form-switch form-check-custom form-check-solid">
                            <input class="form-check-input top_check" type="checkbox" name="excise" data-id="`+s.id+`" `+checked+` style="border-color: red;">
                            <span class="form-check-label fw-bold text-muted"></span>
                          </label>
                          <!--end::Input-->
                        </td>
                        <!--end::Price=-->
                          <!--begin::Action=-->
                          <td class="text-end">
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                          <a href="/admin/`+table+`/`+s.id+`/edit" >
                            <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                              <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                              </svg></span>
                          </a>
                          <!--end::Svg Icon-->
          
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                              <a href="javascript:void(0)" data-id="`+s.id+`" class="delete" data-table="`+table+`">
                                <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                </svg></span>
                              </a>
                          <!--end::Svg Icon-->
                        </tr>
                        `)
                      })
                    }



                    else if(table == 'events')
                    {
                      $.each(data.info, function(_key, e){
                        $('.append_div').append(`
                        <tr id="tr-`+e.id+`">
                        <!--begin::Category=-->
                        <td>
                          <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="/admin/events/`+e.id+`/edit" class="symbol symbol-50px">
                              <span class="symbol-label" style="background-image:url('`+e.photo+`');"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                              <!--begin::Title-->
                              <a href="/admin/events/`+e.id+`/edit" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+e.title+`</a>
                              <!--end::Title-->
                            </div>
                          </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+e.artist+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Price=-->
                        <td class="text-center pe-0">
                          <span class="fw-bolder text-dark">`+e.date+`</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+table+`/`+e.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+e.id+`" class="delete" data-table="`+table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }

                    else if(table == 'categories')
                    {
                      $.each(data.info, function(_key, c){
                        $('.append_div').append(`
                        <tr id="tr-`+c.id+`">
                        <!--begin::Category=-->
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-5">
                              <!--begin::Title-->
                              <a href="/admin/`+table+`/`+c.id+`" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">`+c.name+`</a>
                              <!--end::Title-->
                            </div>
                          </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                        <a href="/admin/`+table+`/`+c.id+`/edit" >
                          <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg></span>
                        </a>
                        <!--end::Svg Icon-->
        
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                            <a href="javascript:void(0)" data-id="`+c.id+`" class="delete" data-table="`+table+`">
                              <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                              <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                              </svg></span>
                            </a>
                        <!--end::Svg Icon-->
                      </tr>
                        `)
                      })
                    }
        
                $('.loading').css('display', 'none');
                $('.no-data').css('display', 'none');
            }
            else
            {
                $('.append_div').html('')
                active = 'inactive';
                $('.no-data').css('display', 'block');
                $('.loading').css('display', 'none');
            }

            
            }

        })
      }
})

//delete function 

$(document).on('click', '.delete', function(){
  table = $(this).data('table')
  id = $(this).data('id')

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: '/admin/'+table+'/'+id,
        type: 'delete',
        dataType: 'json',
        success: function(data){
          $(document).find('#tr-'+id).fadeOut()
        }
      })
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
  

})

//delete function

  //store function

  $('form').on('submit', function(){
    $('.indicator-label').css('display', 'none')
		$('.indicator-progress').css('display', 'block')
		$('#button').css('opacity', '.4')
    $('#button').prop('disabled', true)
		let formData = new FormData(this);
    id = $(this).attr('id')
    operation = $(this).data('operation')
    if(operation == 'store')
    {
        $.ajax({
        url: '/admin/'+id,
        data: formData,
        type: 'post',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data){
          alertify.success(data.message);
          $('.indicator-label').css('display', 'block')
          $('.indicator-progress').css('display', 'none')
          $('#button').css('opacity', '')
          $('#button').prop('disabled', false)
          window.location.replace('/admin/'+id).delay(1000);
        },
        error: function(data){
          $('.photo').addClass('d-none')
          $('.image').addClass('d-none')
          $('.cover_photo').addClass('d-none')
          $.each(data.responseJSON.errors, function(_key, e){
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          $('#'+_key).css('border-color', 'red')
          
          if(_key != 'category_id' && _key != 'product_type_id')
          {
            $('#'+_key).val('')
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }

          if(_key == 'photo' || _key == 'cover_photo' || _key == 'image')
          {
            $('.'+_key).removeClass('d-none')
            $('.'+_key).html(e[0])
          }
          });

          if(data.responseJSON.status == 0)
          {
            Swal.fire({
              text: data.responseJSON.message,
              icon: "error",
              buttonsStyling: !1,
              confirmButtonText: "Ok!",
              customClass: {
                  confirmButton: "btn btn-danger"
              }
            });
          }
          $('.indicator-label').css('display', 'block')
          $('.indicator-progress').css('display', 'none')
          $('#button').css('opacity', '')
          $('#button').prop('disabled', false)
        }
      })
      
    }
    else if(operation == 'update')
    {
      $.ajax({
        url: '/admin/'+id+'/update',
        type: 'post',
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        enctype: 'multipart/form-data',
        success: function(data){
          Swal.fire({
              text: data.message,
              icon: "success",
              buttonsStyling: !1,
              confirmButtonText: "Ok!",
              customClass: {
                  confirmButton: "btn btn-primary"
              }
          });
          $('.indicator-label').css('display', 'block')
          $('.indicator-progress').css('display', 'none')
          $('#button').css('opacity', '')
          $('#button').prop('disabled', false)
        },
        error: function(data){
          $.each(data.responseJSON.errors, function(_key, e){
            $('#'+_key).css('border-color', 'red')
            $('#'+_key).val('')
            
            if(_key != 'category_id' && _key != 'product_type_id')
          {
            $('#'+_key).val('')
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }

          });

          if (data.responseJSON.status == 0) 
          {
              Swal.fire({
                text: data.responseJSON.message,
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok!",
                customClass: {
                    confirmButton: "btn btn-danger"
                }
              });
          }

          $('.indicator-label').css('display', 'block')
          $('.indicator-progress').css('display', 'none')
          $('#button').css('opacity', '')
          $('#button').prop('disabled', false)
        }
      })
    }

		
  })

  //store functions end

  $('#seo_update').on('submit', function(){
    $('.indicator-label').css('display', 'none')
    $('.indicator-progress').css('display', 'block')
    $('#seo_button').css('opacity', '.4')
    let formData = new FormData($(this)[0]);
    
    
    $.ajax({
    url: '/admin/seo-update',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
    dataType: 'json',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success: function(data){
    Swal.fire({
        text: data.message,
        icon: "success",
        buttonsStyling: !1,
        confirmButtonText: "Ok!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#seo_button').css('opacity', '')
    },
    error: function(data){
    $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          if(_key != 'category_id')
          {
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }
    
        });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#seo_button').css('opacity', '')
    }
    })
    })

  $('#contact_update').on('submit', function(){
    $('.indicator-label').css('display', 'none')
    $('.indicator-progress').css('display', 'block')
    $('#contact_button').css('opacity', '.4')
    let formData = new FormData($(this)[0]);
    
    
    $.ajax({
    url: '/admin/contact-update',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
    dataType: 'json',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success: function(data){
    Swal.fire({
        text: data.message,
        icon: "success",
        buttonsStyling: !1,
        confirmButtonText: "Ok!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#contact_button').css('opacity', '')
    },
    error: function(data){
    $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          if(_key != 'category_id')
          {
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }
    
        });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#contact_button').css('opacity', '')
    }
    })
    })
    
    $('#privacy_update').on('submit', function(){
    $('.indicator-label').css('display', 'none')
    $('.indicator-progress').css('display', 'block')
    $('#privacy_button').css('opacity', '.4')
    let formData = new FormData($(this)[0]);
    
    
    $.ajax({
    url: '/admin/privacy-update',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
    dataType: 'json',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success: function(data){
    Swal.fire({
        text: data.message,
        icon: "success",
        buttonsStyling: !1,
        confirmButtonText: "Ok!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#privacy_button').css('opacity', '')
    },
    error: function(data){
    $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          if(_key != 'category_id')
          {
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }
    
        });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#privacy_button').css('opacity', '')
    }
    })
    })
    
    $('#about_update').on('submit', function(){
    $('.indicator-label').css('display', 'none')
    $('.indicator-progress').css('display', 'block')
    $('#about_button').css('opacity', '.4')
    let formData = new FormData($(this)[0]);
    
    
    $.ajax({
    url: '/admin/about-update',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
    dataType: 'json',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success: function(data){
    Swal.fire({
        text: data.message,
        icon: "success",
        buttonsStyling: !1,
        confirmButtonText: "Ok!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#about_button').css('opacity', '')
    },
    error: function(data){
    $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).val('')
          if(_key != 'category_id')
          {
            $('#'+_key).attr('placeholder', e[0])
            $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')
          }
    
        });
    $('.indicator-label').css('display', 'block')
    $('.indicator-progress').css('display', 'none')
    $('#about_button').css('opacity', '')
    }
    })
    })

  


$('input').keyup(function(){
val = $(this).val();
if(val == '' && $(this).data('id') != 'search')
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



$('.eye-click').click(function(){
	
	status = $(this).data('status')
	if(status == 'visible')
	{
		$(this).closest('.position-relative').find('input').attr('type', 'text')
		$(this).closest('.position-absolute').find('.bi-eye-slash').css('display', 'none')
		$(this).closest('.position-absolute').find('.bi-eye').removeClass('d-none')
		$(this).data('status', 'invisible')
	}
	else
	{
		$(this).closest('.position-relative').find('input').attr('type', 'password')
		$(this).closest('.position-absolute').find('.bi-eye-slash').css('display', 'block')
		$(this).closest('.position-absolute').find('.bi-eye').addClass('d-none')
		$(this).data('status', 'visible')
	}
	
	
})

$(document).on('click', '.top_check', function(){
  id = $(this).data('id')
  var status;
  if($(this).prop('checked') == true)
  status = 1;
  else
  status = 0;



  $.ajax({
    url: '/admin/top-check',
    type: 'post',
    data: {id:id, status:status}
  })
})



$('#kt_sign_in_submit').click(function(){
    let form = $('#login-form').serialize();

    $.ajax({
      url: '/admin/login-try',
      type: 'POST',
      data: form,
      dataType: 'json',
      beforeSend: function(){
        $('.indicator-label').css('display', 'none')
        $('.indicator-progress').css('display', 'block')
        $('#kt_sign_in_submit').css('opacity', '.4')
      },
      success: function(data){
        $('.login').html('Daxil ol')
        console.log(data)
        if(data.status == 1)
        {
			Swal.fire({
				text: data.message,
				icon: "success",
				buttonsStyling: !1,
				confirmButtonText: "Giriş!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			}).then((function () {
				window.location.replace('/admin/dashboard');
			}));
            
        }

        if(data.status == 0)
        {
          Swal.fire({
                        text: "Giriş uğursuz oldu, yenidən cəhd et",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Cəhd et",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
        }

        $('.indicator-label').css('display', 'block')
        $('.indicator-progress').css('display', 'none')
        $('#kt_sign_in_submit').css('opacity', '')


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
        $('.indicator-label').css('display', 'block')
        $('.indicator-progress').css('display', 'none')
        $('#kt_sign_in_submit').css('opacity', '')
      }
    })
  })
  

  $(document).on('click', '.confirm', function(){
    id = $(this).data('id')
    table = $(this).data('table')

    Swal.fire({
      title: 'Əminsiniz?',
      text: "Bu əməliyyatı geri qaytara bilməyəcəksiniz!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Bəli, təsdiqlə!'
    }).then((result) => {
      if (result.isConfirmed) {
        td = $(this).closest('td')
        td.find('.fa-check').css('display', 'none')
        td.find('.spinner').css('display', 'inline-block')
  
    $.ajax({
      url: '/admin/confirm/'+table,
      type: 'post',
      data: {id:id, table:table},
      dataType: 'json',
      success: function(data){
        td.find('.confirm').fadeOut()
      }
    })
        Swal.fire(
          'Təsdiqləndi!',
          'Məlumat təsdiqləndi.',
          'success'
        )
      }
    })

  })

  

 

  

