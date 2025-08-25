@extends('admin.layouts.app')

@section('title')
Blog List
@endsection

@section('content')
<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Blog List</h3>
                        @can('create user')

                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add Blog</a>

                        @endcan

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                @can('view user')
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$item->title }}</td>
                                    <td>
                                        @if($item->featured_image)
                                            <div>
                                                <img src="{{ Storage::url($item->featured_image)}}" alt="" width="45px" height="35px">
                                            </div>
                                            @else
                                            <span class="text-danger">Current Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Deactive</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @can('edit user')
                                        <a href="{{ route('admin.blogs.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('delete user')
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.blogs.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf @method('DELETE')
                                        </form>
                                        <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></a>
                                        @endcan
                                    </td>
                                </tr>
                                @endcan
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