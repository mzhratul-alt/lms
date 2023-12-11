<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course\Enrollment;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    // Result Create Page Method
    public function create($enrollment_id)
    {
        return view('admin.result.result_create', compact('enrollment_id'));
    }


    // Result Store Method
    public function store(Request $request)
    {
        $enrollment = Enrollment::findOrFail($request->enrollment_id);
        if ($request->hasFile('result')) {
            $result = str()->random(5) . time() . '.' . $request->result->extension();
            $request->result->storeAs('results', $result, 'public');
        }
        $enrollment->result = $result;
        $enrollment->update();
        return back();
    }


    // Result Show Page Method
    public function show($id)
    {
    }


    // Result Edit Page Method
    public function edit($id)
    {
    }


    // Result Update Method
    public function update(Request $request, $id)
    {
    }


    // Result Destroy Method
    public function destroy($id)
    {
    }


    // Result Status Change Method
    public function changeStatus(Request $request)
    {
    }


    //Result Store & Update Method
    protected function storeOrUpdate(Request $request, $id = null)
    {
        if ($id) {
            //Update Result
        } else {
            //Create Result
        }
    }
}
