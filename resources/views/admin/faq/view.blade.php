@extends('admin.layouts.app')

@section('title')
Faq Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.faqs.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">FAQ Update</h3>
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
                                        @foreach($category as $item)
                                        <option value="{{$item->id}}" {{$data->category_id ==$item->id ? "selected" : ''}}>{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" value="{{$data->title}}" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label">Description <span class="text-secondary">(Optional)</span></label>
                                    <textarea name="description" id="description" rows="3"
                                        class=" summernote form-control @error('description') is-invalid @enderror">{!!$data->description!!}</textarea>
                                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Serial -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial <span class="text-secondary">(Optional)</span></label>
                                    <input type="number" value="{{$data->serial}}" name="serial" id="serial"
                                        class="form-control @error('serial') is-invalid @enderror">
                                    @error('serial') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Button Name -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name <span class="text-secondary">(Optional)</span></label>
                                    <input type="text" name="button_name" id="button_name" value="{{$data->button_name}}"
                                        class="form-control @error('button_name') is-invalid @enderror">
                                    @error('button_name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link <span class="text-secondary">(Optional)</span></label>
                                    <input type="text" name="button_link" id="button_link" value="{{$data->button_link}}"
                                        class="form-control @error('button_link') is-invalid @enderror">
                                    @error('button_link') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control">
                                        <option value="1" {{$data->button_type == 1 ? "selected" : ''}}>New Tab</option>
                                        <option value="2" {{$data->button_type == 2 ? "selected" : ''}}>Same Page</option>
                                    </select>
                                </div>

                                <!-- Button Status -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="button_status" class="form-label">Button Status</label>
                                    <select name="button_status" id="button_status" class="form-control">
                                        <option value="1" {{$data->button_status == 1 ? "selected" : ''}}>Active</option>
                                        <option value="2" {{$data->button_status == 2 ? "selected" : ''}}>Deactive</option>
                                    </select>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" value="{{$data->meta_title}}"
                                        class="form-control @error('meta_title') is-invalid @enderror">
                                    @error('meta_title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Meta Keyword -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" value="{{$data->meta_keyword}}"
                                        class="form-control @error('meta_keyword') is-invalid @enderror">
                                    @error('meta_keyword') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <!-- Meta Description -->
                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="2"
                                        class="form-control @error('meta_description') is-invalid @enderror">{!!$data->meta_description!!}</textarea>
                                    @error('meta_description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{$data->status == 1 ? "selected" : ''}}>Active</option>
                                        <option value="0" {{$data->status == 0 ? "selected" : ''}}>Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{$message}}</span> @enderror
                                </div>



                                <div class="col-6 p-1 mb-3">
                                    <label for="image" class="form-label">Meta Image</label>
                                    <input value="{{$data->meta_image}}" accept="image/*" type="file" name="meta_image" id="meta_image" class="form-control p-1 @error('image') is-invalid @enderror">
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
                            </div>

                            
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


@section('script')
<script>
    // Meta meta_image Preview
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
        } else {
            preview.style.display = 'none';
        }
    });
</script>
@endsection