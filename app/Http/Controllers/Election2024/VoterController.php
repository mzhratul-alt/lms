<?php

namespace App\Http\Controllers\Election2024;

use App\Models\Voter\Voter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Voter\Part;

class VoterController extends Controller
{
    // Voter Dependency Injection
    protected $voterModel;


    public function __construct(Voter $voterModel)
    {
        $this->voterModel = $voterModel;
    }


    // Voter Listing Page Method
    public function index()
    {
        return view('election2024.voter_list');
    }
    // Voter Listing Page Method
    public function get_voters(Request $request)
    {
        $ward = $request->ward;
        $part = $request->part;
        $gender = $request->gender;
        $dob = $request->dob;

        $query = Voter::query();

        if ($ward) {
            $query->where('ward_id', $ward);
        }

        if ($part) {
            $query->where('part_id', $part);
        }

        if ($gender) {
            $query->where('gender_id', $gender);
        }

        if ($dob) {
            $query->where('dob', $dob);
        }

        $voters = $query
            ->with('ward')
            ->with('part')
            ->with('gender')
            ->get();
        $parts = Part::select(['id', 'name'])->where('ward_id', $ward)->get();

        return response()->json(['voters' => $voters, 'parts' => $parts, 'dob' => $dob]);
    }




    // Voter Create Page Method
    public function create()
    {
        return view('election2024.voter_create');
    }


    // Voter Store Method
    public function store(Request $request)
    {
    }


    // Voter Show Page Method
    public function show($id)
    {
    }


    // Voter Edit Page Method
    public function edit($id)
    {
    }


    // Voter Update Method
    public function update(Request $request, $id)
    {
    }


    // Voter Destroy Method
    public function destroy($id)
    {
    }


    // Voter Status Change Method
    public function changeStatus(Request $request)
    {
    }


    //Voter Store & Update Method
    protected function storeOrUpdate(Request $request, $id = null)
    {
        if ($id) {
            //Update Voter
        } else {
            //Create Voter
        }
    }
}
