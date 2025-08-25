@extends('admin.layouts.app')

@section('title')
Portfolio Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Portfolio Create</h3>
                            @can('view user')
                            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-6 mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Enter Link">
                                    @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title') is-invalid @enderror">
                                    @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="4" class="form-control @error('meta_description') is-invalid @enderror"></textarea>
                                    @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword" id="meta_keyword" rows="2" class="form-control @error('meta_keyword') is-invalid @enderror"></textarea>
                                    @error('meta_keyword') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-6 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control p-1 @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="mt-2">
                                        <img id="preview-image" src="" alt="Preview" width="70px" height="60px"
                                            style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                </div>


                                <div class="col-6 mb-3">
                                    <label for="meta_image" class="form-label">Meta Image</label>
                                    <input type="file" name="meta_image" id="meta_image" class="form-control p-1 @error('meta_image') is-invalid @enderror">
                                    @error('meta_image') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="mt-2">
                                        <img id="preview-meta" src="" alt="Preview" width="70px" height="60px"
                                            style="object-fit: cover; border-radius: 8px; display:none;">
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-12 mb-3">
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