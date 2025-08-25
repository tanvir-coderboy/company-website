@extends('admin.layouts.app')

@section('title')
FaqCategory Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form id="quickForm" action="{{ route('admin.faq-categories.store',) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">FaqCategory Create</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="company_name">Title<span class="text-danger">*</span></label>
                                    <input value=" " type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="">
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                                <div class="col-12 form-group">
                                    <label for="meta_image">Image</label>
                                    <input value=" " type="file" name="image" class="p-1 form-control @error('image') is-invalid @enderror" id="image">
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <img id="preview-image" src=""
                                            alt="Current Profile Image" width="120" height="120" style="object-fit: cover; border-radius: 8px;display:none;">
                                    </div>
                                </div>


                                <div class="mb-3 col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>


                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Save</button>
                        </div>



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
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection