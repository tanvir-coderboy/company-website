@extends('admin.layouts.app')

@section('title')
Update Cloud Web Hosting
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto">
                <form action="{{ route('admin.servicethree.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> Update Cloud Web Hosting </h3>
                            @can('view user')
                            <a href="{{ route('admin.servicethree.index') }}" class="btn btn-success float-right"> <i class="fa fa-angle-left"></i> Back </a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-6 p-1 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{$data->name}}" type="text" name="name" id="name" placeholder="Enter name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input value="{{$data->price}}" type="text" name="price" id="price" placeholder="Enter price" class="form-control @error('price') is-invalid @enderror">
                                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="vat" class="form-label">VAT (%)</label>
                                    <input value="{{$data->vat}}" type="text" name="vat" id="vat" placeholder="Enter VAT percentage" class="form-control @error('vat') is-invalid @enderror">
                                    @error('vat') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input value="{{$data->duration}}" type="text" name="duration" id="duration" placeholder="Enter duration" class="form-control @error('duration') is-invalid @enderror">
                                    @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="speed" class="form-label">Speed</label>
                                    <input value="{{$data->speed}}" type="text" name="speed" id="speed" placeholder="Enter speed" class="form-control @error('speed') is-invalid @enderror">
                                    @error('speed') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="serial" class="form-label">Serial</label>
                                    <input value="{{$data->serial}}" type="number" name="serial" id="serial" placeholder="Enter serial number" class="form-control @error('serial') is-invalid @enderror">
                                    @error('serial') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-6 p-1 mb-3">
                                    <label for="list_1" class="form-label">List One</label>
                                    <input value="{{$data->list_1}}" type="text" name="list_1" id="list_1" placeholder="Enter list item one" class="form-control @error('list_1') is-invalid @enderror">
                                    @error('list_1') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_2" class="form-label">List Two</label>
                                    <input value="{{$data->list_2}}" type="text" name="list_2" id="list_2" placeholder="Enter list item two" class="form-control @error('list_2') is-invalid @enderror">
                                    @error('list_2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_3" class="form-label">List Three</label>
                                    <input value="{{$data->list_3}}" type="text" name="list_3" id="list_3" placeholder="Enter list item three" class="form-control @error('list_3') is-invalid @enderror">
                                    @error('list_3') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_4" class="form-label">List Four</label>
                                    <input value="{{$data->list_4}}" type="text" name="list_4" id="list_4" placeholder="Enter list item four" class="form-control @error('list_4') is-invalid @enderror">
                                    @error('list_4') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_5" class="form-label">List Five</label>
                                    <input value="{{$data->list_5}}" type="text" name="list_5" id="list_5" placeholder="Enter list item five" class="form-control @error('list_5') is-invalid @enderror">
                                    @error('list_5') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_6" class="form-label">List Six</label>
                                    <input value="{{$data->list_6}}" type="text" name="list_6" id="list_6" placeholder="Enter list item six" class="form-control @error('list_6') is-invalid @enderror">
                                    @error('list_6') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="list_7" class="form-label">List Seven</label>
                                    <input value="{{$data->list_7}}" type="text" name="list_7" id="list_7" placeholder="Enter list item seven" class="form-control @error('list_7') is-invalid @enderror">
                                    @error('list_7') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="button_name" class="form-label">Button Name</label>
                                    <input value="{{$data->button_name}}" type="text" name="button_name" id="button_name" placeholder="Enter button name" class="form-control @error('button_name') is-invalid @enderror">
                                    @error('button_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input value="{{$data->button_link}}" type="text" name="button_link" id="button_link" placeholder="Enter button link" class="form-control @error('button_link') is-invalid @enderror">
                                    @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-6 p-1 mb-3">
                                    <label for="button_type" class="form-label">Button Type</label>
                                    <select name="button_type" id="button_type" class="form-control @error('button_link') is-invalid @enderror">
                                        <option value="1" {{$data->button_type== 1 ? 'selected' : ''}}>New Tab</option>
                                        <option value="2" {{$data->button_type== 2 ? 'selected' : ''}}>Same Page</option>
                                    </select>
                                    @error('button_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="1" {{$data->status== 1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$data->status== 0 ? 'selected' : ''}}>Deactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-edit"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection