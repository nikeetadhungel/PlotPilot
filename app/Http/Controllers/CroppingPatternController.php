<?php

namespace App\Http\Controllers;

use App\Models\CroppingPattern;
use Illuminate\Http\Request;

class CroppingPatternController extends Controller
{
    public function index(Request $request)
    {
        // Get query parameters for filtering
        $locality = $request->input('locality');
        $cropType = $request->input('cropType');

        // Start the query
        $query = CroppingPattern::query();

        // Apply filters if values are provided
        if ($locality) {
            $query->where('locality', 'like', '%' . $locality . '%');
        }

        if ($cropType) {
            $query->where('crop_type', 'like', '%' . $cropType . '%');
        }

        // Get the filtered data
        $croppingPatterns = $query->get();

        return view('cropping', compact('croppingPatterns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'locality' => 'required|string',
            'cropType' => 'required|string',
            'season' => 'required|string',
            'irrigation' => 'required|string',
        ]);

        CroppingPattern::create([
            'locality' => $request->locality,
            'crop_type' => $request->cropType,
            'season' => $request->season,
            'irrigation' => $request->irrigation,
        ]);

        return back()->with('success', 'Cropping pattern added successfully!');
    }

    public function exportToCSV()
    {
        $croppingPatterns = CroppingPattern::all();

        $csvFileName = 'cropping_patterns_' . now()->format('Y_m_d_H_i_s') . '.csv';
        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename={$csvFileName}",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $handle = fopen('php://output', 'w');

        fputcsv($handle, ['Locality', 'Crop Type', 'Season', 'Irrigation']);

        foreach ($croppingPatterns as $pattern) {
            fputcsv($handle, [
                $pattern->locality,
                $pattern->crop_type,
                $pattern->season,
                $pattern->irrigation
            ]);
        }

        return response()->stream(function () use ($handle) {
            fclose($handle);
        }, 200, $headers);
    }
}
