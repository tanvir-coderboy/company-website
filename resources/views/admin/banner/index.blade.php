@extends('admin.layouts.app')

@section('title')
Banner Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.banners.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Banner Update</h3>
                        </div>

                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-lg-6 mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" value="{{ $data->title }}" class="form-control @error('title') is-invalid @enderror" required>
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="button_name" class="form-label">Button Name</label>
                                    <input type="text" name="button_name" id="button_name" value="{{ $data->button_name }}" class="form-control @error('button_name') is-invalid @enderror">
                                    @error('button_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input type="text" name="button_link" id="button_link" value="{{ $data->button_link }}" class="form-control @error('button_link') is-invalid @enderror">
                                    @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control">
                                        <option value="1" {{ $data->button_type == 1 ? 'selected' : '' }}>New Tab</option>
                                        <option value="2" {{ $data->button_type == 2 ? 'selected' : '' }}>Same Page</option>
                                    </select>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="service_1" class="form-label">Service One</label>
                                    <input type="text" name="service_1" id="service_1" value="{{ $data->service_1 }}" class="form-control @error('service_1') is-invalid @enderror">
                                    @error('service_1') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="service_2" class="form-label">Service Two</label>
                                    <input type="text" name="service_2" id="service_2" value="{{ $data->service_2 }}" class="form-control @error('service_2') is-invalid @enderror">
                                    @error('service_2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="service_3" class="form-label">Service Three</label>
                                    <input type="text" name="service_3" id="service_3" value="{{ $data->service_3 }}" class="form-control @error('service_3') is-invalid @enderror">
                                    @error('service_3') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-lg-6 mb-3">
                                    <label for="service_4" class="form-label">Service Four</label>
                                    <input type="text" name="service_4" id="service_4" value="{{ $data->service_4 }}" class="form-control @error('service_4') is-invalid @enderror">
                                    @error('service_4') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="service_5" class="form-label">Service Five</label>
                                    <input type="text" name="service_5" id="service_5" value="{{ $data->service_5 }}" class="form-control @error('service_5') is-invalid @enderror">
                                    @error('service_5') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label for="service_6" class="form-label">Service Six</label>
                                    <input type="text" name="service_6" id="service_6" value="{{ $data->service_6 }}" class="form-control @error('service_6') is-invalid @enderror">
                                    @error('service_6') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="4" rows="4" class="form-control @error('description') is-invalid @enderror">{!!$data->description!!}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="image" class="form-label">Banner Image</label>
                                    <input type="file" name="image" id="image" accept="image/*" class="form-control p-1 @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    <div class="mt-2">
                                        <img id="preview-image" src="{{ $data->image ? Storage::url($data->image) : '' }}" width="120" height="120" style="object-fit: cover; border-radius: 8px; {{ $data->image ? '' : 'display:none;' }}" alt="Banner Preview">
                                    </div>
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

@section('script')
<script>
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
</script>
@endsection

@endsection