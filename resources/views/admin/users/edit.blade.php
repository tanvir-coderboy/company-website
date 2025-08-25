@extends('admin.layouts.app')

@section('title')
Update User
@endsection


@section('content')


<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Update User</h3>
                        @can('view user')
                            <a href="{{ route('admin.users.index') }}" class="btn btn-success float-right"><i class="fa fa-angle-left"> Back</i></a>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <form id="quickForm" method="POST" action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}">
                        @csrf
                        @if(isset($user)) @method('PUT') @endif

                        <div class="card-body row">
                            <div class="form-group col-lg-6">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Password {{ isset($user) ? '(যদি বর্তমান রাখতে চান, ফাঁকা রাখুন)' : '' }} <span class="text-black-50">(Optional)</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Retype Password <span class="text-black-50">(Optional)</span></label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password ">
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Roles <span class="text-danger">*</span></label>
                                <div class="row">
                                    @foreach($roles as $role)
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" name="roles[]" value="{{ $role->name }}"
                                                {{ isset($userRoles) && in_array($role->name, $userRoles) ? 'checked' : '' }}>
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Update</button>
                        </div>
                    </form>

                    <!-- /.card-body -->
                </div>


            </div>



        </div>

    </div>
</section>

@section('script')
<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview-image');
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


@endsection