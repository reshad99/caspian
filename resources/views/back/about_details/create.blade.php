@extends('back.layouts.master')


@section('ckeditor')
    <script>
      var $ckfield = CKEDITOR.replace( 'text1' );
      var $ckfield = CKEDITOR.replace( 'text2' );
    </script>
@endsection
@section('title', 'Kateqoriyalar')
@section('content')

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
  <!--begin::Post-->
  <div class="content flex-row-fluid" id="kt_content">
    <form id="{{ Request::segment(2) }}" data-operation="store" action="javascript:void(0)" class="form d-flex flex-column flex-lg-row" >
      <!--begin::Main column-->
      <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
          <!--begin::Card header-->
          <div class="card-header">
            <div class="card-title">
              <h2>Detay əlavə et</h2>
            </div>
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Başlıq</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="title" name="title" value="" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Kiçik mətn</label>
              <!--end::Label-->
              <!--begin::Input-->
              <textarea name="text" id="" cols="30" class="form-control" rows="10"></textarea>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Card header-->
        </div>
        <!--end::General options-->
        <div class="d-flex justify-content-end">
          <!--begin::Button-->
          <a href="/admin/{{ Request::segment(2) }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Geri qayıt</a>
          <!--end::Button-->
          <!--begin::Button-->
          <button type="submit" id="button" class="btn btn-primary">
            <span class="indicator-label">Əlavə et</span>
            <span class="indicator-progress">Zəhmət olmasa gözləyin... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
          </button>
          <!--end::Button-->
        </div>
      </div>
      <!--end::Main column-->
    </form>
  </div>
  <!--end::Post-->
</div>
<!--end::Container-->
@endsection
