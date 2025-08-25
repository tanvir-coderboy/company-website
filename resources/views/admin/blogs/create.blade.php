@extends('admin.layouts.app')

@section('title')
Add Blogs
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Add Blogs</h3>
                        @can('view user')
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="blogForm" method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body row">


                            <div class="form-group col-lg-12 mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" value=" " class="form-control" placeholder="Title" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-12 mb-3">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3" placeholder="Short description"></textarea>
                                @error('short_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Description"></textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" value="" class="form-control" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" placeholder="Meta Description"></textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keyword" class="form-control" placeholder="Meta Keywords"> </textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label> Image</label>
                                <input type="file" name="featured_image" id="featured_image" class="p-1 form-control">
                                <img id="preview-featured" src="" alt="Preview" style="max-width: 80px; margin-top: 10px;display:none;">
                                @error('featured_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label>Meta Image</label>
                                <input type="file" name="meta_image" id="meta_image" class="p-1 form-control">
                                <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px;display:none;">
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Status -->
                            <div class="form-group col-lg-12 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
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
    // Featured Image Preview
    document.getElementById('featured_image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview-featured');
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