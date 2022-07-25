@extends('back.layouts.master')

@section('title', 'Kateqoriyalar')
@section('content')
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
  <!--begin::Post-->
  <div class="content flex-row-fluid" id="kt_content">
    <!--begin::Category-->
    <div class="card card-flush">
      <!--begin::Card header-->
      <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
          <!--begin::Search-->
          <div class="d-flex align-items-center position-relative my-1">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-1 position-absolute ms-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-ecommerce-category-filter="search" id="search_category" data-id="search" class="form-control form-control-solid w-250px ps-14 search" data-table="{{ Request::segment(2) }}" placeholder="Axtarış" />
          </div>
          <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
          <!--begin::Add customer-->
          <a href="/admin/{{ Request::segment(2) }}/create" class="btn btn-primary">Detay əlavə et</a>
          <!--end::Add customer-->
        </div>
        <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body table-responsive table-card-append pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" data-table="{{ Request::segment(2) }}" id="kt_ecommerce_category_table">
          <!--begin::Table head-->
          <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
              <th class="text-center min-w-250px">Başlıq</th>
              <th class="text-center min-w-250px">Kiçik mətn</th>
              <th class="text-end min-w-70px">Redaktə</th>
            </tr>
            <!--end::Table row-->
          </thead>
          <!--end::Table head-->
          <!--begin::Table body-->
          <tbody class="fw-bold text-gray-600 append_div">
            @foreach ($abouts as $a)
                <!--begin::Table row-->
                <tr id="tr-{{$a->id}}">
                  <!--begin::Price=-->
                  <td class="text-center pe-0">
                    <span class="fw-bolder text-dark">{{ $a->title }}</span>
                  </td>
                  <!--end::Price=-->
                  <!--begin::Price=-->
                  <td class="text-center pe-0">
                    <span class="fw-bolder text-dark">{{ $a->text }}</span>
                  </td>
                  <!--end::Price=-->
                  <!--begin::Action=-->
                  <td class="text-end">
                  <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                  <a href="/admin/{{ Request::segment(2) }}/{{ $a->id }}/edit" >
                    <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                      <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                      </svg></span>
                  </a>
                  <!--end::Svg Icon-->
  
                  <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
                      <a href="javascript:void(0)" data-id="{{ $a->id }}" class="delete" data-table="{{ Request::segment(2) }}">
                        <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                        <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                        </svg></span>
                      </a>
                  <!--end::Svg Icon-->
                </tr>
                <!--end::Table row-->
            @endforeach
        
            <!--begin::Table row-->
          </tbody>
          <!--end::Table body-->
        </table>
        <!--end::Table-->
        <div class="col-md-12 text-center loading" >
          <img src="/images/spinner2.gif" alt="">
        </div>
        <div class="alert alert-primary no-data text-center h3">Məlumat Yoxdur</div>
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Category-->
  </div>
  <!--end::Post-->
</div>
<!--end::Container-->
@endsection
