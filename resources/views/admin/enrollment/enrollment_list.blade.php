@extends('layouts.admin_master')
@section('page_title', 'Enrollment')
@section('admin_main_content')
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Sl. No.</th>
                    <th>Student Name</th>
                    <th>Course Name</th>
                    <th>Payment Method</th>
                    <th>TXN Phone</th>
                    <th>TXN ID</th>
                    <th>Approval</th>
                    <th>Result</th>
                </tr>
                @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>{{ $enrollment->student->name }}</td>
                    <td>{{ $enrollment->course->title }}</td>
                    <td><span class="badge bg-success">{{ $enrollment->payment_method }}</span></td>
                    <td>{{ $enrollment->phone_number }}</td>
                    <td>{{ $enrollment->txn_id }}</td>
                    <td>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="enrollment_approval"
                                data-id="{{ $enrollment->id }}" {{ $enrollment->is_approved ? 'checked':'' }}>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('admin.result.create',$enrollment->id) }}">Add Result</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
@push('additional_js')
<script>
    $(function(){
        $('#enrollment_approval').on('change', function(){
            let enrollment_id = $(this).data('id');
            $.ajax({
                url:`{{ route('admin.enrollment.changeApproval') }}`,
                method:"GET",
                data:{enrollment_id},
                success:function(res){
                    if(res){
                        $('#enrollment_approval').attr('checked','checked')
                    }else{
                        $('#enrollment_approval').removeAttr('checked')
                    }
                }
            });
        })
    })
</script>
@endpush
