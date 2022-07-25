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
              <h2>Artist əlavə et</h2>
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
              <input type="text" class="form-control mb-2" id="title" name="title" value="{{ $blog->title }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Kateqoriya</label>
              <!--end::Label-->
              <!--begin::Input-->
              <select name="category_id" class="form-control" id="category_id">
                <option value="">Seç</option>
                @foreach ($categories as $c)
                <option value="{{ $c->id }}" @if($c->id == $blog->category_id) selected @endif>{{ $c->name }}</option>
                @endforeach
              </select>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Açıqlama</label>
              <!--end::Label-->
              <!--begin::Input-->
              <textarea name="description" id="description" id="" cols="30" rows="10">{!! $blog->description !!}</textarea>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Instagram link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="instagram" name="instagram" value="{{ $blog->instagram }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Tiktok link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="tiktok" name="tiktok" value="{{ $blog->tiktok }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Youtube link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="youtube" name="youtube" value="{{ $blog->youtube }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Twitter link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="twitter" name="twitter" value="{{ $blog->twitter }}" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-1 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Facebook link</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input type="text" class="form-control mb-2" id="facebook" name="facebook" value="{{ $blog->facebook }}" />
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
                <h2>Profil şəkli</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $blog->photo }}')">
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
              <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ $blog->cover_photo }}')">
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
          <input type="hidden" name="id" value="{{ $blog->id }}">
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
