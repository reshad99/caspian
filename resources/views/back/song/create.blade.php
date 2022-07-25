@extends('back.layouts.master')

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
              <h2>Mahnı əlavə et</h2>
            </div>
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Mahnının adı</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="name" name="name" value="" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Uzunluq</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" placeholder="0:00" id="duration" name="duration" value="" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Artist</label>
              <!--end::Label-->
              <!--begin::Input-->
              <select name="artist_id" id="artist_id" class="form-control">
                <option value="">Seç</option>
                @foreach ($artists as $a)
                <option value="{{ $a->id }}">{{ $a->name }}</option>
                @endforeach
              </select>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Mahnı</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="file" class="form-control mb-2" id="mp3" name="mp3" accept=".mp3" value="" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
              <!--begin::Card header-->
              <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                  <h2>Şəkil</h2>
                </div>
                <!--end::Card title-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(../../../assets/media/svg/files/blank-image.svg)">
                  <!--begin::Preview existing avatar-->
                  <div class="image-input-wrapper w-150px h-150px"></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="photo" accept=".png, .jpg, .jpeg, .webp" />
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
                  <div class="alert alert-danger d-none photo"></div>
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
