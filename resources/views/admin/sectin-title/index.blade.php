@extends('admin.layouts.app')

@section('title')
Section Title Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.section-title.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Section Title Update</h3>
                        </div>

                        <div class="card-body">
                            <div class="row g-3">


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="service_title" class="form-label">Service Title</label>
                                    <input type="text" name="service_title" id="service_title" value="{{ $data->service_title }}" class="form-control @error('service_title') is-invalid @enderror">
                                    @error('service_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="service_description" class="form-label">Service Description</label>
                                    <textarea name="service_description" id="service_description" rows="3" class="form-control @error('service_description') is-invalid @enderror">{{ $data->service_description }}</textarea>
                                    @error('service_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="chosse_title" class="form-label">Choose Title</label>
                                    <input type="text" name="chosse_title" id="chosse_title" value="{{ $data->chosse_title }}" class="form-control @error('chosse_title') is-invalid @enderror">
                                    @error('chosse_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="chosse_description" class="form-label">Choose Description</label>
                                    <textarea name="chosse_description" id="chosse_description" rows="3" class="form-control @error('chosse_description') is-invalid @enderror">{{ $data->chosse_description }}</textarea>
                                    @error('chosse_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="testimonial_title" class="form-label">Testimonial Title</label>
                                    <input type="text" name="testimonial_title" id="testimonial_title" value="{{ $data->testimonial_title }}" class="form-control @error('testimonial_title') is-invalid @enderror">
                                    @error('testimonial_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="testimonial_description" class="form-label">Testimonial Description</label>
                                    <textarea name="testimonial_description" id="testimonial_description" rows="3" class="form-control @error('testimonial_description') is-invalid @enderror">{{ $data->testimonial_description }}</textarea>
                                    @error('testimonial_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="portfolio_title" class="form-label">Portfolio Title</label>
                                    <input type="text" name="portfolio_title" id="portfolio_title" value="{{ $data->portfolio_title }}" class="form-control @error('portfolio_title') is-invalid @enderror">
                                    @error('portfolio_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="portfolio_description" class="form-label">Portfolio Description</label>
                                    <textarea name="portfolio_description" id="portfolio_description" rows="3" class="form-control @error('portfolio_description') is-invalid @enderror">{{ $data->portfolio_description }}</textarea>
                                    @error('portfolio_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="blog_title" class="form-label">Blog Title</label>
                                    <input type="text" name="blog_title" id="blog_title" value="{{ $data->blog_title }}" class="form-control @error('blog_title') is-invalid @enderror">
                                    @error('blog_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="blog_description" class="form-label">Blog Description</label>
                                    <textarea name="blog_description" id="blog_description" rows="3" class="form-control @error('blog_description') is-invalid @enderror">{{ $data->blog_description }}</textarea>
                                    @error('blog_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="contact_title" class="form-label">Contact Title</label>
                                    <input type="text" name="contact_title" id="contact_title" value="{{ $data->contact_title }}" class="form-control @error('contact_title') is-invalid @enderror">
                                    @error('contact_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="contact_description" class="form-label">Contact Description</label>
                                    <textarea name="contact_description" id="contact_description" rows="3" class="form-control @error('contact_description') is-invalid @enderror">{{ $data->contact_description }}</textarea>
                                    @error('contact_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="team_title" class="form-label">Team Title</label>
                                    <input type="text" name="team_title" id="team_title" value="{{ $data->team_title }}" class="form-control @error('team_title') is-invalid @enderror">
                                    @error('team_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 p-1 mb-3">
                                    <label for="team_description" class="form-label">Team Description</label>
                                    <textarea name="team_description" id="team_description" rows="3" class="form-control @error('team_description') is-invalid @enderror">{{ $data->team_description }}</textarea>
                                    @error('team_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 form-group">
                                    <label for="chosse_image">Why Choose Image</label>
                                    <input required value="{{$data->chosse_image}}" type="file" name="chosse_image" class="p-1 form-control @error('chosse_image') is-invalid @enderror" id="chosse_image">
                                    @error('chosse_image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    @if($data->chosse_image)
                                    <div class="mt-2">
                                        <img id="preview-chosse_image" src="{{ Storage::url($data->chosse_image) }}"
                                            alt="Current Profile Image" width="120" height="120" style="object-fit: cover; border-radius: 8px;">
                                    </div>
                                    @else
                                    <div class="mt-2">
                                        <img id="preview-chosse_image" src=""
                                            alt="Current Profile Image" width="120" height="120" style="object-fit: cover; border-radius: 8px;display:none;">
                                    </div>
                                    @endif
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
    document.getElementById('chosse_image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview-chosse_image');
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