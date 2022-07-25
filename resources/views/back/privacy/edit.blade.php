@extends('back.layouts.master')

@section('title', 'Gizlilik siyasəti')

@section('ckeditor')
    <script>
      var $ckfield2 = CKEDITOR.replace( 'text_az' );
		  var $ckfield3 = CKEDITOR.replace( 'text_en' );
		  var $ckfield4 = CKEDITOR.replace( 'text_ru' );
    </script>
@endsection

@section('content')

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
  <!--begin::Post-->
  <div class="content flex-row-fluid" id="kt_content">
    <form id="privacy_update" class="form d-flex flex-column flex-lg-row" action="javascript:void(0)">
      <!--begin::Main column-->
      <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
          <!--begin::Card header-->
          <div class="card-header">
            <div class="card-title">
              <h2>General</h2>
            </div>
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body pt-0">
            <!--begin::Input group-->
            <div>
              <!--begin::Label-->
              <label class="form-label">Gizlilik siyasəti Azərbaycanca</label>
              <!--end::Label-->
              <!--begin::Editor-->
              <textarea class="form-control form-control-solid" id="text_az" name="text_az">{{$privacy->text_az}}</textarea>
              <!--end::Editor-->
              <!--begin::Description-->
              <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
              <!--end::Description-->
            </div>
            <!--end::Input group-->
              <!--begin::Input group-->
              <div>
                <!--begin::Label-->
                <label class="form-label">Gizlilik siyasəti Rusca</label>
                <!--end::Label-->
                <!--begin::Editor-->
                <textarea class="form-control form-control-solid" id="text_en" name="text_en">{{$privacy->text_en}}</textarea>
                <!--end::Editor-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                <!--end::Description-->
              </div>
              <!--end::Input group-->
                <!--begin::Input group-->
            <div>
              <!--begin::Label-->
              <label class="form-label">Gizlilik siyasəti İngiliscə</label>
              <!--end::Label-->
              <!--begin::Editor-->
              <textarea class="form-control form-control-solid" id="text_ru" name="text_ru">{{$privacy->text_ru}}</textarea>
              <!--end::Editor-->
              <!--begin::Description-->
              <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
              <!--end::Description-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Card header-->
        </div>
        <!--end::General options-->
        <div class="d-flex justify-content-end">
          <!--begin::Button-->
          <a href="products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
          <!--end::Button-->
          <!--begin::Button-->
          <button type="submit" id="privacy_button" class="btn btn-primary">
            <span class="indicator-label">Güncəllə</span>
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
