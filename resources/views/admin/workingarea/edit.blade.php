@extends('admin.layouts.app')

@section('title')
Update About our WorkingArea
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.workingarea.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> Update About our WorkingArea </h3>
                            @can('view user')
                            <a href="{{ route('admin.workingarea.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label"> Title</label>
                                    <input type="text" value="{{$data->title}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input  value="{{$data->serial}}" type="number" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" placeholder="Enter serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label"> Description</label>
                                    <textarea name="description" id="description" rows="3" class="form-control summernote @error('description') is-invalid @enderror" placeholder="Enter Description">{!!$data->description!!}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name</label>
                                    <input  value="{{$data->button_name}}" type="text" name="button_name" id="button_name" class="form-control @error('button_name') is-invalid @enderror" placeholder="Enter Button Name">
                                    @error('button_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control @error('button_type') is-invalid @enderror">
                                        <option value="1" {{$data->button_type == 1 ? 'selected' : ''}}>New Tab</option>
                                        <option value="2" {{$data->button_type == 2 ? 'selected' : ''}}>Same Page</option>
                                    </select>
                                    @error('button_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input  value="{{$data->button_link}}" type="text" name="button_link" id="button_link" class="form-control @error('button_link') is-invalid @enderror" placeholder="Enter Button Link">
                                    @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>




                               <div class="col-6 p-1 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input value="{{$data->image}}" accept="image/*" type="file" name="image" id="image" class="form-control p-1 @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    @if($data->image)
                                    <div class="mt-2">
                                        <img id="preview-image" src="{{Storage::url($data->image)}}" alt="empty image" width="80px" height="70px">
                                    </div>
                                    @else
                                    <div class="mt-2">
                                        <img id="preview-image" src="" alt="empty image" width="80px" height="70px" style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                    @endif

                                </div>



                                <div class="col-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Update</button>
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
    // Image preview
    document.getElementById("image").addEventListener("change", function(event) {
        let reader = new FileReader();
        reader.onload = function() {
            let preview = document.getElementById("preview-image");
            preview.src = reader.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection