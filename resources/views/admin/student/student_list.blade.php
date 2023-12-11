@extends('layouts.admin_master')
@section('page_title', 'Students')
@section('admin_main_content')
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Sl. No.</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>
                        <img style="width: 50px;" class="img-thumbnail rounded"
                            src="{{ $student->profile ? asset('storage/students/'. $student->profile) : env('DICEBEAR').$student->name }}"
                            alt="">
                    </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td class="d-flex">
                        <form action="{{ route('admin.student.delete', $student->id) }}" method="POST">
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
