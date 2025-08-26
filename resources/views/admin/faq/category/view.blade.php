@extends('admin.layouts.app')

@section('title')
FaqCategory Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form id="quickForm" action="{{ route('admin.faq-categories.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">FaqCategory Update</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Name" required>
                                    @error('title')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Image -->

                                <div class="from-group  col-lg-12">
                                    <label for="image" class="form-label">Image <span class="text-secondary">(optional)</span></label>
                                    <input type="file" class="form-control p-1 @error('image') is-invalid @enderror" id="image" name="image">
                                    @if($data->image)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($data->image) }}" id="preview-image" width="80" height="60" alt="Current Image">
                                    </div>
                                    @endif
                                </div>

                                <!-- Status -->
                                <div class="mb-3 col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
                                    </select>
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
    </script>
@endsection