<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiskArea;

class RiskAreaController extends Controller
{
    public function index()
    {
        $riskAreas = RiskArea::all();
        return view('risk_areas.index', compact('riskAreas'));
    }

    public function create()
    {
        return view('risk_areas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'risk_type' => 'required|string',
            'severity_level' => 'required|integer',
        ]);

        RiskArea::create($data);

        return redirect('/risk-areas');
    }

    public function show($id)
    {
        $riskArea = RiskArea::findOrFail($id);
        return view('risk_areas.show', compact('riskArea'));
    }

    public function edit($id)
    {
        $riskArea = RiskArea::findOrFail($id);
        return view('risk_areas.edit', compact('riskArea'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'risk_type' => 'required|string',
            'severity_level' => 'required|integer',
        ]);

        RiskArea::whereId($id)->update($data);

        return redirect('/risk-areas');
    }

    public function destroy($id)
    {
        $riskArea = RiskArea::findOrFail($id);
        $riskArea->delete();

        return redirect('/risk-areas');
    }
}

