@extends('admin.layouts.app')

@section('title')
Create Property Preservation Processing
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form id="faqForm" action="{{ route('admin.servicetwo.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> Create Property Preservation Processing </h3>
                            @can('view user')
                            <a href="{{ route('admin.servicetwo.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 p-1 mb-3">
                                    <label for="service_type" class="form-label">Service Type <span class="text-danger">*</span></label>
                                    <select name="service_type" id="service_type" class="form-control">
                                        <option value="What We Are Doing">What We Are Doing</option>
                                        <option value="Our Processing Workflow">Our Processing Workflow</option>
                                        <option value="Work Type">Work Type</option>
                                    </select>
                                    @error('service_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>




                                <div class="col-6 p-1 mb-3">
                                    <label for="title" class="form-label"> Title</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-12 p-1 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control summernote @error('title') is-invalid @enderror"></textarea>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input type="number" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" placeholder="Enter serial">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-6 mb-3">
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

@endsection