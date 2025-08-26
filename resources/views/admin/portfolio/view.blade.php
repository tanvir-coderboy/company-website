@extends('admin.layouts.app')

@section('title')
Update Portfolio
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="portfolioEditForm" action="{{ route('admin.portfolios.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Update Portfolio </h3>
                            @can('view user')
                            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($category as $item)
                                        <option value="{{ $item->id }}" {{ $data->category_id == $item->id ? 'selected' : '' }}> {{ $item->title }} </option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" name="link" id="link" value="{{ $data->link }}" class="form-control @error('link') is-invalid @enderror" placeholder="Enter Link">
                                    @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" value="{{ $data->meta_title }}" class="form-control @error('meta_title') is-invalid @enderror">
                                    @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="4" class="form-control @error('meta_description') is-invalid @enderror">{!!$data->meta_description!!}</textarea>
                                    @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword" id="meta_keyword" rows="2" class="form-control @error('meta_keyword') is-invalid @enderror">{!!$data->meta_keyword!!}</textarea>
                                    @error('meta_keyword') <span class="text-danger">{{ $message }}</span> @enderror
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



                                <div class="col-6 p-1 mb-3">
                                    <label for="meta_image" class="form-label">Meta Image</label>
                                    <input value="{{$data->meta_image}}" accept="image/*" type="file" name="meta_image" id="meta_image" class="form-control p-1 @error('meta_image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    @if($data->meta_image)
                                    <div class="mt-2">
                                        <img id="preview-meta" src="{{Storage::url($data->meta_image)}}" alt="empty image" width="80px" height="70px">
                                    </div>
                                    @else
                                    <div class="mt-2">
                                        <img id="preview-meta" src="" alt="empty image" width="80px" height="70px" style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                    @endif

                                </div>



                                <div class="col-12 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
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

{{-- Preview Script --}}
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

    // Meta Image preview
    document.getElementById("meta_image").addEventListener("change", function(event) {
        let reader = new FileReader();
        reader.onload = function() {
            let preview = document.getElementById("preview-meta");
            preview.src = reader.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>

@endsection