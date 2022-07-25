@extends('back.layouts.master')


@section('ckeditor')
    <script>
      var $ckfield = CKEDITOR.replace( 'description' );
    </script>
@endsection
@section('title', 'Kateqoriyalar')
@section('content')

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
  <!--begin::Post-->
  <div class="content flex-row-fluid" id="kt_content">
    <form id="{{ Request::segment(2) }}" data-operation="update" action="javascript:void(0)" class="form d-flex flex-column flex-lg-row" >
      <!--begin::Main column-->
      <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
          <!--begin::Card header-->
          <div class="card-header">
            <div class="card-title">
              <h2>Tədbir güncəllə</h2>
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
              <input type="text" class="form-control mb-2" id="title" name="title" value="{{ $event->title }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Artistin adını daxil et</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="artist" name="artist" value="{{ $event->artist }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Location</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="location" name="location" value="{{ $event->location }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Location Link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="location_link" name="location_link" value="{{ $event->location_link }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Tarix</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="date" class="form-control mb-2" id="date" name="date" value="{{ $event->date }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Saat</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="time" value="{{ $event->time }}" name="time" placeholder="00:00"/>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Açıqlama</label>
              <!--end::Label-->
              <!--begin::Input-->
              <textarea name="description" id="description" id="" cols="30" rows="10">{!! $event->description !!}</textarea>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Card header-->
          <!--begin::Thumbnail settings-->
          <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Başlıq şəkli</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $event->photo }}')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
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
          <!--begin::Thumbnail settings-->
          <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Cover şəkli</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $event->cover_photo }}')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="cover_photo" accept=".png, .jpg, .jpeg" />
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
                <div class="alert alert-danger d-none cover_photo"></div>
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
        <div class="d-flex justify-content-end">
          <!--begin::Button-->
          <a href="/admin/{{ Request::segment(2) }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Geri qayıt</a>
          <!--end::Button-->
          <!--begin::Button-->
          <input type="hidden" name="id" value="{{ $event->id }}">
          <button type="submit" id="button" class="btn btn-primary">
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
