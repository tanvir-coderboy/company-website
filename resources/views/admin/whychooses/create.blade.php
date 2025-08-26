@extends('admin.layouts.app')

@section('title')
Whychooses Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form id="faqForm" action="{{ route('admin.whychooses.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Whychooses Create</h3>
                            @can('view user')
                            <a href="{{ route('admin.whychooses.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-lg-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" value=" " placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-lg-12 mb-3">
                                    <label for="experience" class="form-label">Experience</label>
                                    <input type="text" name="experience" id="experience" value=" " placeholder="Enter experience" class="form-control @error('experience') is-invalid @enderror">
                                    @error('experience') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-lg-12 mb-3">
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