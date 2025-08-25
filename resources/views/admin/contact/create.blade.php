@extends('admin.layouts.app')

@section('title')
Create Contact
@endsection

@section('content')

<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Create Contact</h3>
                        @can('view user')
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
                        @endcan
                    </div>
                    <form id="contactForm" method="POST" action="{{ route('admin.contacts.store') }}">
                        @csrf
                        @method('POST')
                        <div class="card-body row">

                            <div class="form-group col-lg-6 mb-3">
                                <label for="reaching">Reaching</label>
                                <input type="text" id="reaching" name="reaching" value="{{ old('reaching') }}" class="form-control" placeholder="Reaching">
                                @error('reaching')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone">
                                @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-6 mb-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control" placeholder="Address">
                                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-12 mb-3">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control summernote" rows="4" placeholder="Message"></textarea>
                                @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group col-lg-12 mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
