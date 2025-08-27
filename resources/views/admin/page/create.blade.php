@extends('admin.layouts.app')

@section('title')
Add Page
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Add Page</h3>
                        @can('view user')
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="blogForm" method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body row">

                            <div class="form-group col-lg-6 mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" value=" " class="form-control  @error('title') is-invalid @enderror " placeholder="Title" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" value=" " class="form-control" placeholder="Slug">
                                @error('slug')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control summernote" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" value="  " class="form-control" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-12 mb-3">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keyword" class="form-control" rows="3" placeholder="Meta Keywords">{{ old('meta_keyword') }}</textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3" placeholder="Meta Description">{{ old('meta_description') }}</textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label>Meta Image</label>
                                <input type="file" name="meta_image" id="meta_image" class=" p-1 form-control">
                                <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display:none;">
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Deactive</option>
                                </select>
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    // Meta Image Preview
    document.getElementById('meta_image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview-meta');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
        }
    });
</script>
@endsection
