@extends('admin.layouts.app')

@section('title')
Cloud Web HostingList
@endsection

@section('content')
<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Cloud Web Hosting List</h3>
                        @can('create user')

                        <a href="{{ route('admin.servicethree.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add </a>

                        @endcan

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>VAT</th>
                                    <th>Duration</th>
                                    <th class="text-center">Status</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->name }}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->vat}}</td>
                                    <td>{{$item->duration}}</td>
                                    <td class="text-center">
                                        <label class="switch">
                                            <input type="checkbox"
                                                class="status-toggle"
                                                data-id="{{ $item->id }}"
                                                {{ $item->status == 1 ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>

                                    <td class="text-center">
                                        @can('edit user')
                                        <a href="{{ route('admin.servicethree.show', $item->id) }}" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.servicethree.edit', $item->id) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('delete user')
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.servicethree.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf @method('DELETE')
                                        </form>
                                        <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $item->id }}" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>

    </div>
</section>

@endsection


@section('script')
<script>
    $(document).ready(function() {
        $('.status-toggle').on('change', function() {
            let checkbox = $(this);
            let id = checkbox.data('id');
            let status = checkbox.is(':checked') ? 1 : 0;

            $.ajax({
                url: "{{ route('admin.servicethree.status.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function(res) {
                    if (res.status == 1) {
                        // Success message using SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Status has been activated successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        // Warning message using SweetAlert2
                        Swal.fire({
                            icon: 'warning',
                            title: 'Status has been deactivated successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function() {
                    // Error message using SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'There was a problem updating the status.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    checkbox.prop('checked', !status); // Rollback if the update fails
                }
            });
        });
    });
</script>

@endsection