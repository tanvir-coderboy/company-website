@extends('admin.layouts.app')

@section('title')
Team Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Team Create</h3>
                            @can('view user')
                            <a href="{{ route('admin.teams.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" name="designation" id="designation" class="form-control  @error('designation') is-invalid @enderror" placeholder="Enter Designation">
                                    @error('designation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12 p-1 mb-3">
                                    <label for="bio" class="form-label">Bio</label>
                                    <textarea name="bio" id="bio" class="form-control  @error('bio') is-invalid @enderror" rows="4" placeholder="Enter Bio"></textarea>
                                    @error('bio') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                

                                <div class="col-md-12 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input type="number" name="serial" id="serial" class="form-control  @error('serial') is-invalid @enderror" placeholder="Enter Serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="url" name="facebook" id="facebook" class="form-control  @error('facebook') is-invalid @enderror" placeholder="Facebook Profile Link">
                                    @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="url" name="twitter" id="twitter" class="form-control  @error('twitter') is-invalid @enderror" placeholder="Twitter Profile Link">
                                    @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="url" name="instagram" id="instagram" class="form-control @error('instagram') is-invalid @enderror" placeholder="Instagram Profile Link">
                                    @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6 p-1 mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="url" name="linkedin" id="linkedin" class="form-control @error('linkedin') is-invalid @enderror" placeholder="LinkedIn Profile Link">
                                    @error('linkedin') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-md-6 p-1 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="mt-2">
                                        <img id="preview-image" src="" alt="Preview" width="70" height="60" style="object-fit:cover;border-radius:8px;display:none;">
                                    </div>
                                </div>

                                
                                <div class="col-md-6 p-1 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control  @error('status') is-invalid @enderror">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end ">
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
