@extends('admin.layouts.app')

@section('title')
Update Website Design Service
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.serviceone.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Update Website Design Service </h3>
                            @can('view user')
                            <a href="{{ route('admin.serviceone.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 p-1 mb-3">
                                    <label for="service_type" class="form-label">Service Type <span class="text-danger">*</span></label>
                                    <select name="service_type" id="service_type" class="form-control">
                                        <option value="Tools & Technologies" {{ $data->service_type == 'Tools & Technologies' ? 'selected' : '' }}>Tools & Technologies</option>
                                        <option value="Our Process" {{ $data->service_type == 'Our Process' ? 'selected' : '' }}>Our Process</option>
                                        <option value="Types of Websites We Build" {{ $data->service_type == 'Types of Websites We Build' ? 'selected' : '' }}>Types of Websites We Build</option>
                                    </select>
                                    @error('service_type')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label">Section Title</label>
                                    <input type="text" value="{{$data->title}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" value="{{$data->name}}" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input type="number" value="{{$data->serial}}" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" placeholder="Enter serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label"> Section Description</label>
                                    <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description">{!! $data->description !!}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="short_description" class="form-label"> Description</label>
                                    <textarea name="short_description" id="short_description" rows="3" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter Short Description">{!! $data->short_description !!}</textarea>
                                    @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
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
                                        <option value="1" {{$data->status ==1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{$data->status ==0 ? 'selected' : '' }}>Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
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