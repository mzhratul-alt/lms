@extends('layouts.admin_master')
@section('page_title', 'Voter List')
@section('admin_main_content')
    <div class="row">
        <div class="col-lg-3">
            <div class="mb-3">
                <label for="ward" class="form-label">Select Ward</label>
                <select class="form-select" id="ward" name="ward">
                    <option selected disabled>Select Ward</option>
                    <option value="1">16 No.</option>
                    <option value="2">17 No.</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="mb-3">
                <label for="part" class="form-label">Select Part</label>
                <select class="form-select" id="part" name="part">
                    <option selected disabled>Select Part</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="mb-3">
                <label for="gender" class="form-label">Select Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option selected disabled>Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="mb-3">
                <label for="dob" class="form-label">Select DOB</label>
                <input type="date" id="dob" name="dob" class="form-control">
            </div>
        </div>
    </div>
    <div class="row" id="voter_list"></div>
@endsection
@push('additional_js')
    <script>
        $(function() {
            let ward = $('#ward');
            let part = $('#part');
            let gender = $('#gender');
            let dob = $('#dob');

            ward.on('change', function() {
                $.ajax({
                    url: `{{ route('admin.voter.get_voters') }}`,
                    method: 'GET',
                    data: {
                        'ward': $(this).val(),
                    },
                    success: function(res) {
                        const part_options = []
                        res.parts.forEach(part => {
                            let part_option = `<option value="${part.id}">${part.name}</option>`;
                            part_options.push(part_option)
                        });
                        $('#part').html(part_options);

                        const voters = []
                        res.voters.forEach(voter => {
                            let voter_card =
                                `<div class="col-lg-4">
                                        <div class="card mb-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Ward:</span>
                                                    ${voter.ward.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Part:</span>
                                                    ${voter.part.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Gender:</span>
                                                    ${voter.gender.type}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Name:</span>
                                                    ${voter.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Voter No.:</span>
                                                    ${voter.voter_number}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Father's Name:</span>
                                                    ${voter.father_name}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="fw-bolder">Mother's Name:</span>
                                                        ${voter.mother_name}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="fw-bolder">Occupation:</span>
                                                            ${voter.occupation}

                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Date Of Birth:</span>
                                                    ${voter.dob}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Address:</span>
                                                    ${voter.address}
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-sm">Print</button>
                                        </div>
                                    </div>`;

                            voters.push(voter_card);
                        });
                        $('#voter_list').html(voters);
                    }
                });
            })
            part.on('change', function() {
                $.ajax({
                    url: `{{ route('admin.voter.get_voters') }}`,
                    method: 'GET',
                    data: {
                        'ward': $('#ward').val(),
                        'part': $(this).val(),
                    },
                    success: function(res) {

                        const voters = []
                        res.voters.forEach(voter => {

                            let voter_card =
                                `<div class="col-lg-4">
                                        <div class="card mb-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Ward:</span>
                                                    ${voter.ward.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Part:</span>
                                                    ${voter.part.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Gender:</span>
                                                    ${voter.gender.type}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Name:</span>
                                                    ${voter.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Voter No.:</span>
                                                    ${voter.voter_number}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Father's Name:</span>
                                                    ${voter.father_name}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="fw-bolder">Mother's Name:</span>
                                                        ${voter.mother_name}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="fw-bolder">Occupation:</span>
                                                            ${voter.occupation}

                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Date Of Birth:</span>
                                                    ${voter.dob}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Address:</span>
                                                    ${voter.address}
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-sm">Print</button>
                                        </div>
                                    </div>`;

                            voters.push(voter_card);
                        });
                        $('#voter_list').html(voters);
                    }
                });
            })
            gender.on('change', function() {
                $.ajax({
                    url: `{{ route('admin.voter.get_voters') }}`,
                    method: 'GET',
                    data: {
                        'ward': $('#ward').val(),
                        'part': $('#part').val(),
                        'gender': $(this).val(),
                    },
                    success: function(res) {

                        const voters = []
                        res.voters.forEach(voter => {

                            let voter_card =
                                `<div class="col-lg-4">
                                        <div class="card mb-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Ward:</span>
                                                    ${voter.ward.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Part:</span>
                                                    ${voter.part.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Gender:</span>
                                                    ${voter.gender.type}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Name:</span>
                                                    ${voter.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Voter No.:</span>
                                                    ${voter.voter_number}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Father's Name:</span>
                                                    ${voter.father_name}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="fw-bolder">Mother's Name:</span>
                                                        ${voter.mother_name}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="fw-bolder">Occupation:</span>
                                                            ${voter.occupation}

                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Date Of Birth:</span>
                                                    ${voter.dob}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Address:</span>
                                                    ${voter.address}
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-sm">Print</button>
                                        </div>
                                    </div>`;

                            voters.push(voter_card);
                        });
                        $('#voter_list').html(voters);
                    }
                });
            })
            dob.on('change', function() {
                $.ajax({
                    url: `{{ route('admin.voter.get_voters') }}`,
                    method: 'GET',
                    data: {
                        'ward': $('#ward').val(),
                        'part': $('#part').val(),
                        'gender': $("#gender").val(),
                        'dob': $(this).val(),
                    },
                    success: function(res) {
                        console.log(res.dob);

                        const voters = []
                        res.voters.forEach(voter => {
                            let voter_card =
                                `<div class="col-lg-4">
                                        <div class="card mb-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Ward:</span>
                                                    ${voter.ward.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Part:</span>
                                                    ${voter.part.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Gender:</span>
                                                    ${voter.gender.type}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Name:</span>
                                                    ${voter.name}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Voter No.:</span>
                                                    ${voter.voter_number}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Father's Name:</span>
                                                    ${voter.father_name}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="fw-bolder">Mother's Name:</span>
                                                        ${voter.mother_name}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="fw-bolder">Occupation:</span>
                                                            ${voter.occupation}

                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Date Of Birth:</span>
                                                    ${voter.dob}
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="fw-bolder">Address:</span>
                                                    ${voter.address}
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-sm">Print</button>
                                        </div>
                                    </div>`;

                            voters.push(voter_card);
                        });
                        $('#voter_list').html(voters);
                    }
                });
            })
        })
    </script>
@endpush
