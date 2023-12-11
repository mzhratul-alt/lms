@extends('layouts.admin_master')
@section('page_title', 'Teachers')
@section('admin_main_content')
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Sl. No.</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>
                        <img style="width: 50px;" class="img-thumbnail" src="{{ $teacher->profile == "dummy.png"
                            ?env('PLACEHOLDER').$teacher->name :asset('storage/teachers/'. $teacher->profile) }}" alt="">
                    </td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->designation }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-warning">
                            <i class='bx bx-edit-alt'></i>
                        </a>
                        <form action="{{ route('admin.teacher.delete', $teacher->id) }}" method="POST">
                            @csrf
                            @method('DElETE')
                            <button class="btn btn-danger" type="submit">
                                <i class='bx bx-trash'></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
