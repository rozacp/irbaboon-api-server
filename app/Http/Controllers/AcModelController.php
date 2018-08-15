<?php

namespace App\Http\Controllers;

use App\AcModel;
use Illuminate\Http\Request;

class AcModelController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('index', 'show')
    }
    
    /**
     * Show all Ac Models
     */
    public function Index()
    {
        $acmodels = AcModel::all();
        
        return response()->json($acmodels);
    }

    /**
     * Show one Ac Model
     */
    public function show($id)
    {
        $acmodel = AcModel::find($id);

        return response()->json($acmodel);
    }

    /**
     * Create new Ac Model
     */
    public function create(Request $request)
    {
        $acmodel = AcModel::create($request->all());

        return response()->json($acmodel, 201);
    }

    /**
     * Edit existing Ac Model
     */
    public function update(Request $request, $id)
    {
        $acmodel = AcModel::findOrFail($id);
        $acmodel->update($request->all());

        return response()->json($acmodel, 200);
    }

    /**
     * Delete existing Ec Model
     */
    public function delete($id)
    {
        AcModel::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
