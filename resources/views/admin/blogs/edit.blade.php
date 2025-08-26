@extends('admin.layouts.app')

@section('title')
Update Blogs
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Update Blogs</h3>
                        @can('view user')
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="blogForm" method="POST" action="{{ route('admin.blogs.update',$data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body row">


                            <div class="form-group col-lg-12 mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control" placeholder="Title" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-12 mb-3">
                                <label>Short Description</label>
                                <textarea name="short_description" id="short_description" class="form-control" rows="3" placeholder="Short description">{!!$data->short_description!!}</textarea>
                                @error('short_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" id="description" class="form-control summernote" rows="4" placeholder="Description">{!!$data->description!!}</textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" value="{{$data->meta_title}}" class="form-control" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control " placeholder="Meta Description">{!!$data->short_description!!}</textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keyword" id="meta_keyword" class="form-control" placeholder="Meta Keywords">{!!$data->meta_keyword!!}</textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label for="image">Image</label>
                                <input type="file" id="featured_image" name="featured_image" class="p-1 form-control @error('featured_image') is-invalid @enderror">
                                @if($data->featured_image)
                                <img id="preview-image" src="{{Storage::url($data->featured_image)}}" alt="Preview" style="max-width: 80px; margin-top: 10px;">
                                @else
                                <img id="preview-image" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @endif
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Meta Image -->
                            <div class="form-group col-lg-6 mb-3">
                                <label for="meta_image">Meta Image</label>
                                <input type="file" id="meta_image" name="meta_image" class="p-1 form-control @error('meta_image') is-invalid @enderror">
                                @if($data->meta_image)
                                <img id="preview-meta" src="{{Storage::url($data->meta_image)}}" alt="Preview" style="max-width: 80px; margin-top: 10px;">
                                @else
                                <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @endif
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <!-- Status -->
                            <div class="form-group col-lg-12 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{$data->status==1 ? 'selected' : ''}}>Active</option>
                                    <option value="0" {{$data->status==1 ? 'selected' : ''}}>Deactive</option>
                                </select>
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
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
        const preview = document.getElementById('preview-image');
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