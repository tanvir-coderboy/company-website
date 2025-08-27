@extends('admin.layouts.app')

@section('title')
Update Property Preservation Processing
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.servicetwo.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> Update Property Preservation Processing </h3>
                            @can('view user')
                            <a href="{{ route('admin.servicetwo.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 p-1 mb-3">
                                    <label for="service_type" class="form-label">Service Type <span class="text-danger">*</span></label>
                                    <select name="service_type" id="service_type" class="form-control">
                                        <option value="What We Are Doing" {{ $data->service_type == 'What We Are Doing' ? 'selected' : '' }}>What We Are Doing</option>
                                        <option value="Our Processing Workflow" {{ $data->service_type == 'Our Processing Workflow' ? 'selected' : '' }}>Our Processing Workflow</option>
                                        <option value="Work Type" {{ $data->service_type == 'Work Type' ? 'selected' : '' }}>Work Type</option>
                                    </select>
                                    @error('service_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>




                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label"> Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control summernote @error('title') is-invalid @enderror">{!!$data->description!!}</textarea>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>  


                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input type="number" value="{{$data->serial}}" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" placeholder="Enter serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{$data->status ==1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$data->status ==0 ? 'selected' : ''}}>Deactive</option>
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

@endsection