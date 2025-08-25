@extends('admin.layouts.app')

@section('title')
AboutUs Update
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="quickForm" action="{{ route('admin.abouts.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">AboutUs Update</h3>
                        </div>

                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" value="{{ $data->title }}" class="form-control @error('title') is-invalid @enderror">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                
                                <div class="col-lg-12 mb-3">
                                    <label for="mission_title" class="form-label">Mission Title</label>
                                    <input type="text" name="mission_title" id="mission_title" value="{{ $data->mission_title }}" class="form-control @error('mission_title') is-invalid @enderror">
                                    @error('mission_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                
                                <div class="col-lg-12 mb-3">
                                    <label for="mission_description" class="form-label">Mission Description</label>
                                    <textarea name="mission_description" id="mission_description" rows="3" class="form-control @error('mission_description') is-invalid @enderror">{{ $data->mission_description }}</textarea>
                                    @error('mission_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

  
                                
                                <div class="col-lg-12 mb-3">
                                    <label for="vision_title" class="form-label">Vision Title</label>
                                    <input type="text" name="vision_title" id="vision_title" value="{{ $data->vision_title }}" class="form-control @error('vision_title') is-invalid @enderror">
                                    @error('vision_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <!-- Vision Description -->
                                <div class="col-lg-12 mb-3">
                                    <label for="vision_description" class="form-label">Vision Description</label>
                                    <textarea name="vision_description" id="vision_description" rows="3" class="form-control @error('vision_description') is-invalid @enderror">{{ $data->vision_description }}</textarea>
                                    @error('vision_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12">
                                    <label for="core_value_text" class="form-label">Core Value Text</label>
                                    <textarea name="core_value_text" id="core_value_text" rows="3" class="form-control @error('core_value_text') is-invalid @enderror">{{ $data->core_value_text }}</textarea>
                                    @error('core_value_text') <span class="text-danger">{{ $message }}</span> @enderror
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
