@extends('admin.layouts.app')

@section('title')
Update Core Value
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Update Core Value</h3>
                        @can('view user')
                        <a href="{{ route('admin.cores.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="coreValueForm" method="POST" action="{{ route('admin.cores.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body row">
                            <div class="form-group col-lg-6 mb-3">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" value="{{ $data->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Serial -->
                            <div class="form-group col-lg-6 mb-3">
                                <label for="serial">Serial <span class="text-danger">*</span></label>
                                <input type="number" id="serial" name="serial" value="{{ $data->serial }}" class="form-control @error('serial') is-invalid @enderror" placeholder="Serial" required>
                                @error('serial')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Description"> {!!$data->description!!} </textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" value="{{ $data->meta_title }}" class="form-control @error('meta_title') is-invalid @enderror" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" placeholder="Meta Description">{!!$data->meta_description!!}</textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="meta_keyword">Meta Keywords</label>
                                <textarea id="meta_keyword" name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror" placeholder="Meta Keywords">{!!$data->meta_keyword!!}</textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" class="form-control p-1 @error('image') is-invalid @enderror">
                                @if($data->image)
                                    <img id="preview-image" src="{{Storage::url($data->image)}}" alt="Preview" style="max-width: 80px; margin-top: 10px;">
                                @else
                                    <img id="preview-image" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @endif
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Meta Image -->
                            <div class="form-group col-lg-6 mb-3">
                                <label for="meta_image">Meta Image</label>
                                <input type="file" id="meta_image" name="meta_image" class="form-control p-1 @error('meta_image') is-invalid @enderror">
                                @if($data->meta_image)
                                    <img id="preview-meta" src="{{Storage::url($data->meta_image)}}" alt="Preview" style="max-width: 80px; margin-top: 10px;">
                                @else
                                    <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @endif
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Status -->
                            <div class="form-group col-lg-12 mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
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
    // Image Preview
    document.getElementById('image').addEventListener('change', function(event) {
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
        }
    });
</script>
@endsection
