@extends('admin.layouts.app')

@section('title')
Add Core Value
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Add Core Value</h3>
                        @can('view user')
                        <a href="{{ route('admin.cores.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="coreValueForm" method="POST" action="{{ route('admin.cores.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body row">
                            <div class="form-group col-lg-6 mb-3">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" >
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label for="serial">Serial <span class="text-danger">*</span></label>
                                <input type="number" id="serial" name="serial" value="{{ old('serial') }}" class="form-control @error('serial') is-invalid @enderror" placeholder="Serial" >
                                @error('serial')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-12 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control  @error('description') is-invalid @enderror" rows="4" placeholder="Description"> </textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>




                            <!-- Meta Title -->
                            <div class="form-group col-lg-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" class="form-control @error('meta_title') is-invalid @enderror" placeholder="Meta Title">
                                @error('meta_title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Meta Description -->
                            <div class="form-group col-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" placeholder="Meta Description">{{ old('meta_description') }}</textarea>
                                @error('meta_description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Meta Keywords -->
                            <div class="form-group col-12 mb-3">
                                <label for="meta_keyword">Meta Keywords</label>
                                <textarea id="meta_keyword" name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror" placeholder="Meta Keywords">{{ old('meta_keyword') }}</textarea>
                                @error('meta_keyword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" class=" p-1 form-control @error('image') is-invalid @enderror">
                                <img id="preview-image" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="meta_image">Meta Image</label>
                                <input type="file" id="meta_image" name="meta_image" class=" p-1 form-control @error('meta_image') is-invalid @enderror">
                                <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group col-lg-12 mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
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