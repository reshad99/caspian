@extends('back.layouts.master')

@section('title', 'Məhsullar')
@section('content')

	<!--begin::Container-->
  <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
       <!--begin::Form-->
       <form id="partners" data-operation="store" action="javascript:void(0)" class="form d-flex flex-column flex-lg-row">
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
          <!--begin::Tab content-->
          <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
              <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                  <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-1 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label">Link</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control mb-2" id="link" name="link" value="" />
                      <!--end::Input-->
                    </div>
                    <!--begin::Input group-->
                  </div>
                  
         <!--begin::Thumbnail settings-->
          <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Logo</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                  <input type="hidden" name="avatar_remove" />
                  <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                  <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                  <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
              </div>
              <!--end::Image input-->
              <!--begin::Description-->
              <div class="text-muted fs-7">Yalnız png, jpg, wep, jpeg formatında şəkillər qəbul olunur</div>
              <!--end::Description-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Thumbnail settings-->
        </div>
        <!--end::General options-->
             
            </div>
            <!--end::Tab pane-->
          </div>
          <!--end::Tab content-->
          <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="/admin/{{ Request::segment(2) }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="button" class="btn btn-primary">
              <span class="indicator-label">Save Changes</span>
              <span class="indicator-progress">Please wait... 
              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
          </div>
        </div>
        <!--end::Main column-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Post-->
  </div>
</div>
  <!--end::Container-->
@endsection
