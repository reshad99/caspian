@extends('back.layouts.master')

@section('title', 'Haqqımızda')
@section('ckeditor')
    <script>
      var $ckfield = CKEDITOR.replace( 'meta_description' );
      var $ckfield2 = CKEDITOR.replace( 'text' );
		  var $ckfield3 = CKEDITOR.replace( 'text_en' );
		  var $ckfield4 = CKEDITOR.replace( 'text_ru' );
    </script>
@endsection
@section('content')

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
  <!--begin::Post-->
  <div class="content flex-row-fluid" id="kt_content">
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
      <!--begin:::Tabs-->
      <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
        <!--begin:::Tab item-->
        <li class="nav-item">
          <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
          <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
          <span class="svg-icon svg-icon-2 me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->SEO</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
          <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
          <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
          <span class="svg-icon svg-icon-2 me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="black" />
              <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="black" />
              <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="black" />
              <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="black" />
              <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="black" />
              <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="black" />
              <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="black" />
              <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->Əlaqə</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
          <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#about">
          <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
          <span class="svg-icon svg-icon-2 me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="black" />
              <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="black" />
              <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="black" />
              <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="black" />
              <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="black" />
              <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="black" />
              <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="black" />
              <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->Haqqımızda</a>
        </li>
        <!--end:::Tab item-->
      </ul>
      <!--end:::Tabs-->
      <!--begin:::Tab content-->
      <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
          <!--begin::Products-->
          <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
              <!--begin::Card title-->
              <div class="card-title">
                <!--begin::Title-->
                <h2>SEO</h2>
                <!--end::Title-->
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Form-->
              <form id="seo_update" class="form" action="javascript:void(0)">
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Meta Title</span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the title of the store for SEO."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="meta_title" value="{{$seo->meta_title}}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span>Meta Tag Description</span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the description of the store for SEO."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <textarea class="form-control form-control-solid text-editor" name="meta_description">{{$seo->meta_description}}</textarea>
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span>Meta Keywords</span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="meta_keywords" value="{{$seo->meta_keywords}}" data-kt-ecommerce-settings-type="tagify" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Action buttons-->
                <div class="row">
                  <div class="col-md-9 offset-md-3">
                    <!--begin::Separator-->
                    <div class="separator mb-6"></div>
                    <!--end::Separator-->
                    <div class="d-flex justify-content-end">
                      <!--begin::Button-->
                      <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                      <!--end::Button-->
                      <!--begin::Button-->
                      <button type="submit" data-kt-ecommerce-settings-type="submit" id="seo_button" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                </div>
                <!--end::Action buttons-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Products-->
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
          <!--begin::Products-->
          <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
              <!--begin::Card title-->
              <div class="card-title">
                <!--begin::Title-->
                <h2>Əlaqə</h2>
                <!--end::Title-->
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Form-->
              <form class="form" id="contact_update" action="javascript:void(0)">
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="required">Ünvan Azərbaycanca</span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the store's full address."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <textarea class="form-control form-control-solid" id="address_az" name="address_az">{{ $contact->address_az }}</textarea>
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="required">Ünvan İngiliscə</span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the store's full address."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <textarea class="form-control form-control-solid" id="address_en" name="address_en">{{ $contact->address_en }}</textarea>
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                 <!--begin::Input group-->
                 <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="required">Ünvan Rusca </span>
                      <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the store's full address."></i>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <textarea class="form-control form-control-solid" id="address_ru" name="address_ru">{{ $contact->address_ru }}</textarea>
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="required">Email</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="email" class="form-control form-control-solid" id="email" name="email" value="{{ $contact->email }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="required">Phone</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="phone" name="phone" value="{{ $contact->phone }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Instagram Link</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="instagram" name="instagram" value="{{ $contact->instagram }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Facebook Link</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="facebook" name="facebook" value="{{ $contact->facebook }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Youtube Link</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="youtube" name="youtube" value="{{ $contact->youtube }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Linkedin Link</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="linkedin" name="linkedin" value="{{ $contact->linkedin }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                  <div class="col-md-3 text-md-end">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                      <span class="">Twitter Link</span>
                    </label>
                    <!--end::Label-->
                  </div>
                  <div class="col-md-9">
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" id="twitter" name="twitter" value="{{ $contact->twitter }}" />
                    <!--end::Input-->
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Action buttons-->
                <div class="row">
                  <div class="col-md-9 offset-md-3">
                    <!--begin::Separator-->
                    <div class="separator mb-6"></div>
                    <!--end::Separator-->
                    <div class="d-flex justify-content-end">
                      <!--begin::Button-->
                      <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                      <!--end::Button-->
                      <!--begin::Button-->
                      <button type="submit" id="contact_button" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                </div>
                <!--end::Action buttons-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Products-->
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="about" role="tabpanel">
          <!--begin::Products-->
          <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
              <!--begin::Card title-->
              <div class="card-title">
                <!--begin::Title-->
                <h2>Haqqımızda</h2>
                <!--end::Title-->
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Form-->
              <form class="form" id="about_update" action="javascript:void(0)">
         <!--begin::Thumbnail settings-->
          <div class="card card-flush py-4">
            <div class="card-body pt-0">
              <!--begin::Input group-->
              <div class="mb-1 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Başlıq</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control mb-2" id="title" name="title" value="{{ $about->title }}" />
                <!--end::Input-->
              </div>
              <!--begin::Input group-->
              <!--begin::Input group-->
              <div class="mb-1 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Haqqımızda</label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea name="text" id="text" cols="30" rows="10">{!! $about->text !!}</textarea>
                <!--end::Input-->
              </div>
              <!--begin::Input group-->
            </div>
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Dark Logo</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $about->dark_logo }}')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="dark_logo" accept=".png, .jpg, .jpeg, .webp" />
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
          <!--begin::Thumbnail settings-->
          <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Light Logo</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $about->light_logo }}')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="light_logo" accept=".png, .jpg, .jpeg, .webp" />
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
                <!--begin::Action buttons-->
                <div class="row">
                  <div class="col-md-9 offset-md-3">
                    <!--begin::Separator-->
                    <div class="separator mb-6"></div>
                    <!--end::Separator-->
                    <div class="d-flex justify-content-end">
                      <!--begin::Button-->
                      <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                      <!--end::Button-->
                      <!--begin::Button-->
                      <button type="submit" id="about_button" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                </div>
                <!--end::Action buttons-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Products-->
        </div>
        <!--end:::Tab pane-->
      </div>
      <!--end:::Tab content-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Post-->
</div>
<!--end::Container-->
@endsection
