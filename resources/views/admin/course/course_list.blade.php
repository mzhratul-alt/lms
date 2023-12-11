@extends('layouts.admin_master')
@section('page_title', 'Courses')
@section('admin_main_content')
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Sl. No.</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Teacher Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>
                        <img style="width: 50px;" class="img-thumbnail" src="{{ $course->thumbnail == "dummy.png"
                            ?env('PLACEHOLDER').$course->title : asset('storage/courses/'. $course->thumbnail) }}"
                        alt="">
                    </td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->teacher->name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-warning">
                            <i class='bx bx-edit-alt'></i>
                        </a>
                        <form action="{{ route('admin.course.delete', $course->id) }}" method="POST">
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
