@extends('admin.layouts.app')

@section('title')
Create About our WorkingArea
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.workingarea.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> Create About our WorkingArea </h3>
                            @can('view user')
                            <a href="{{ route('admin.workingarea.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label"> Title</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input type="number" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" placeholder="Enter serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label"> Description</label>
                                    <textarea name="description" id="description" rows="3" class="form-control summernote @error('description') is-invalid @enderror" placeholder="Enter Description"></textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name</label>
                                    <input type="text" name="button_name" id="button_name" class="form-control @error('button_name') is-invalid @enderror" placeholder="Enter Button Name">
                                    @error('button_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control @error('button_type') is-invalid @enderror">
                                        <option value="1">New Tab</option>
                                        <option value="2">Same Page</option>
                                    </select>
                                    @error('button_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input type="text" name="button_link" id="button_link" class="form-control @error('button_link') is-invalid @enderror" placeholder="Enter Button Link">
                                    @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>




                                <div class="col-6 p-1 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input accept="image/*" type="file" name="image" id="image" class="form-control p-1 @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    <div class="mt-2">
                                        <img id="preview-image" src="" alt="Preview" width="70px" height="60px"
                                            style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                </div>



                                <div class="col-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
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