@extends('admin.layouts.app')

@section('title')
Update Contact
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Update Contact</h3>
                        @can('view user')
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-success float-right">
                            <i class="fa fa-angle-left"></i> Back
                        </a>
                        @endcan
                    </div>

                    <form id="contactForm" method="POST" action="{{ route('admin.contacts.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body row">

                            <div class="form-group col-lg-6 mb-3">
                                <label for="reaching">Reaching</label>
                                <input type="text" id="reaching" name="reaching" value="{{$data->reaching}}" class="form-control" placeholder="Reaching">
                                @error('reaching')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{$data->email}}" class="form-control" placeholder="Email">
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone">
                                @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" value="{{$data->address}}" class="form-control" placeholder="Address">
                                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control summernote" rows="4" placeholder="Message">{!! $data->message !!}</textarea>
                                @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-12 mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
                                </select>
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#message').summernote({
            height: 200, 
            
        });
    });
</script>
@endsection
