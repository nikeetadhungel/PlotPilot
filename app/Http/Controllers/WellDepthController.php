<?php

namespace App\Http\Controllers;

use App\Models\WellDepth;
use Illuminate\Http\Request;

class WellDepthController extends Controller
{
    
    public function index(Request $request)
{

    
    $wellDepths = WellDepth::query();

    // Apply filtering based on the inputs from the form
    if ($request->has('locality') && $request->locality != '') {
        $wellDepths->where('locality', 'like', '%' . $request->locality . '%');
    }

    if ($request->has('wellType') && $request->wellType != '') {
        $wellDepths->where('well_type', 'like', '%' . $request->wellType . '%');
    }

    // Retrieve the filtered data
    $wellDepths = $wellDepths->get();

    return view('welldepth', compact('wellDepths'));
}


    public function store(Request $request)
    {
        $request->validate([
            'locality' => 'required|string|max:255',
            'depth' => 'required|integer',
            'waterLevel' => 'required|integer',
            'wellType' => 'required|string|max:100',
        ]);

        WellDepth::create([
            'locality' => $request->locality,
            'depth' => $request->depth,
            'water_level' => $request->waterLevel,
            'well_type' => $request->wellType,
        ]);

        return redirect()->back()->with('success', 'Well Depth added successfully!');
    }

    public function exportToCSV()
{
    $wellDepths = WellDepth::all();

    $csvFileName = 'well_depths_' . now()->format('Y_m_d_H_i_s') . '.csv';
    $headers = [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename={$csvFileName}",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    ];

    $handle = fopen('php://output', 'w');

    // Add CSV headers
    fputcsv($handle, ['Locality', 'Depth', 'Water Level', 'Well Type']);

    // Add data rows
    foreach ($wellDepths as $depth) {
        fputcsv($handle, [
            $depth->locality,
            $depth->depth,
            $depth->water_level,
            $depth->well_type
        ]);
    }

    return response()->stream(function () use ($handle) {
        fclose($handle);
    }, 200, $headers);
}

}

