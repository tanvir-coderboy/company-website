@extends('admin.layouts.app')

@section('title')
Welcome Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.welcomes.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Welcome Update</h3>
                        </div>

                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" value="{{ $data->title }}" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" rows="3" placeholder="Enter Description" class="form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="item1" class="form-label">Item One</label>
                                    <input type="text" name="item1" id="item1" value="{{ $data->item1 }}" placeholder="Enter Item One" class="form-control @error('item1') is-invalid @enderror">
                                    @error('item1') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="item2" class="form-label">Item Two</label>
                                    <input type="text" name="item2" id="item2" value="{{ $data->item2 }}" placeholder="Enter Item Two" class="form-control @error('item2') is-invalid @enderror">
                                    @error('item2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="item3" class="form-label">Item Three</label>
                                    <input type="text" name="item3" id="item3" value="{{ $data->item3 }}" placeholder="Enter Item Three" class="form-control @error('item3') is-invalid @enderror">
                                    @error('item3') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="item4" class="form-label">Item Four</label>
                                    <input type="text" name="item4" id="item4" value="{{ $data->item4 }}" placeholder="Enter Item Four" class="form-control @error('item4') is-invalid @enderror">
                                    @error('item4') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="item5" class="form-label">Item Five</label>
                                    <input type="text" name="item5" id="item5" value="{{ $data->item5 }}" placeholder="Enter Item Five" class="form-control @error('item5') is-invalid @enderror">
                                    @error('item5') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name</label>
                                    <input type="text" name="button_name" id="button_name" value="{{ $data->button_name }}" placeholder="Enter Button Name" class="form-control @error('button_name') is-invalid @enderror">
                                    @error('button_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input type="text" name="button_link" id="button_link" value="{{ $data->button_link }}" placeholder="Enter Button Link" class="form-control @error('button_link') is-invalid @enderror">
                                    @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control @error('button_type') is-invalid @enderror">
                                        <option value="">-- Select Button Type --</option>
                                        <option value="1" {{ $data->button_type == 1 ? 'selected' : '' }}>New Tab</option>
                                        <option value="2" {{ $data->button_type == 2 ? 'selected' : '' }}>Same Page</option>
                                    </select>
                                    @error('button_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="exprience_one_year" class="form-label">Experience One Year</label>
                                    <input type="text" name="exprience_one_year" id="exprience_one_year" value="{{ $data->exprience_one_year }}" placeholder="Enter Experience One Year" class="form-control @error('exprience_one_year') is-invalid @enderror">
                                    @error('exprience_one_year') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="exprience_one_text" class="form-label">Experience One Text</label>
                                    <input type="text" name="exprience_one_text" id="exprience_one_text" value="{{ $data->exprience_one_text }}" placeholder="Enter Experience One Text" class="form-control @error('exprience_one_text') is-invalid @enderror">
                                    @error('exprience_one_text') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="exprience_two_year" class="form-label">Experience Two Year</label>
                                    <input type="text" name="exprience_two_year" id="exprience_two_year" value="{{ $data->exprience_two_year }}" placeholder="Enter Experience Two Year" class="form-control @error('exprience_two_year') is-invalid @enderror">
                                    @error('exprience_two_year') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-1 mb-3">
                                    <label for="exprience_two_text" class="form-label">Experience Two Text</label>
                                    <input type="text" name="exprience_two_text" id="exprience_two_text" value="{{ $data->exprience_two_text }}" placeholder="Enter Experience Two Text" class="form-control @error('exprience_two_text') is-invalid @enderror">
                                    @error('exprience_two_text') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="image" class="form-label"> Image</label>
                                    <input type="file" name="image" id="image" class="form-control p-1 @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                    <div class="mt-2">
                                        <img id="preview-image" src="{{ $data->image ? Storage::url($data->image) : '' }}" width="120" height="120" style="object-fit: cover; border-radius: 8px; {{ $data->image ? '' : 'display:none;' }}" alt="Banner Preview">
                                    </div>
                                </div>


                                <div class="col-lg-6 p-1 mb-3">
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
            </div>

            

            </form>
        </div>
    </div>
    </div>
</section>
@endsection

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