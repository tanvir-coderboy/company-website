@extends('admin.layouts.app')

@section('title')
Faq Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.faqs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">FAQ Create</h3>
                            @can('view user')
                        <a href="{{ route('admin.faqs.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-6 p-1 mb-3">
                                    <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($data as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                         @endforeach
                                    </select>
                                </div>
                               


                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label">Description <span class="text-secondary">(Optional)</span></label>
                                    <textarea name="description" id="description" rows="3"
                                        class=" summernote form-control @error('description') is-invalid @enderror"></textarea>
                                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Serial -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial <span class="text-secondary">(Optional)</span></label>
                                    <input type="number" name="serial" id="serial"
                                        class="form-control @error('serial') is-invalid @enderror">
                                    @error('serial') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Button Name -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name <span class="text-secondary">(Optional)</span></label>
                                    <input type="text" name="button_name" id="button_name"
                                        class="form-control @error('button_name') is-invalid @enderror">
                                    @error('button_name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link <span class="text-secondary">(Optional)</span></label>
                                    <input type="text" name="button_link" id="button_link"
                                        class="form-control @error('button_link') is-invalid @enderror">
                                    @error('button_link') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control">
                                        <option value="1">New Tab</option>
                                        <option value="2">Same Page</option>
                                    </select>
                                </div>

                                <!-- Button Status -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="button_status" class="form-label">Button Status</label>
                                    <select name="button_status" id="button_status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="2">Deactive</option>
                                    </select>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title"
                                        class="form-control @error('meta_title') is-invalid @enderror">
                                    @error('meta_title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Meta Keyword -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword"
                                        class="form-control @error('meta_keyword') is-invalid @enderror">
                                    @error('meta_keyword') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Meta Description -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="2"
                                        class="form-control @error('meta_description') is-invalid @enderror"></textarea>
                                    @error('meta_description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                            <div class="form-group col-lg-6 mb-3">
                                <label for="meta_image">Meta Image</label>
                                <input type="file" id="meta_image" name="meta_image" class="form-control p-1 @error('meta_image') is-invalid @enderror">
                                <img id="preview-meta" src="" alt="Preview" style="max-width: 80px; margin-top: 10px; display: none;">
                                @error('meta_image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </form>
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