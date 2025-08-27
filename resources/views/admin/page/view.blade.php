@extends('admin.layouts.app')

@section('title')
Update Page
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Update Page</h3>
                        @can('view user')
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="pageForm" method="POST" action="{{ route('admin.pages.update',$data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body row">

                            {{-- Title --}}
                            <div class="form-group col-lg-6 mb-3">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" value="{{ $data->title }}" class="form-control" placeholder="Title" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            {{-- Slug --}}
                            <div class="form-group col-lg-6 mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" name="slug" value="{{ $data->slug }}" class="form-control" placeholder="Slug">
                                @error('slug')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            {{-- Description --}}
                            <div class="form-group col-12 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control summernote" rows="5" placeholder="Description">{!!$data->description!!}</textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            {{-- Meta Title --}}
                            <div class="form-group col-lg-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" value="{{ $data->meta_title }}" class="form-control" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            {{-- Meta Keywords --}}
                            <div class="form-group col-lg-12 mb-3">
                                <label for="meta_keyword">Meta Keywords</label>
                                <textarea id="meta_keyword" name="meta_keyword" class="form-control" rows="3" placeholder="Meta Keywords">{!!$data->meta_keyword!!}</textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" class="form-control" rows="3" placeholder="Meta Description">{!!$data->meta_description!!}</textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-6 p-1 mb-3">
                                    <label for="meta_image" class="form-label">meta_image</label>
                                    <input value="{{$data->meta_image}}" accept="image/*" type="file" name="meta_image" id="meta_image" class="form-control p-1 @error('meta_image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    @if($data->meta_image)
                                    <div class="mt-2">
                                        <img id="preview-image" src="{{Storage::url($data->meta_image)}}" alt="empty image" width="80px" height="70px">
                                    </div>
                                    @else
                                    <div class="mt-2">
                                        <img id="preview-image" src="" alt="empty image" width="80px" height="70px" style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                    @endif

                                </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
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
    // Meta Image Preview
    document.getElementById('meta_image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview-image');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection