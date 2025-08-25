@extends('admin.layouts.app')

@section('title')
Service Create
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 m-auto">
                <form id="quickForm" action="{{ route('admin.services.store',) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Service Create</h3>
                             @can('view user')
                            <a href="{{ route('admin.services.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                            @endcan
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
                                    <label for="company_name">Description<span class="text-danger">*</span></label>
                                    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
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


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection