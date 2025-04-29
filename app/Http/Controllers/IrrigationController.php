<?php
namespace App\Http\Controllers;

use App\Models\Irrigation;
use Illuminate\Http\Request;

class IrrigationController extends Controller
{
    // Show the irrigation form and data with optional filtering
    public function index(Request $request)
    {
        $irrigations = Irrigation::query();

        // Apply filtering based on the inputs from the form
        if ($request->has('locality') && $request->locality != '') {
            $irrigations->where('locality', 'like', '%' . $request->locality . '%');
        }

        if ($request->has('source') && $request->source != '') {
            $irrigations->where('source', 'like', '%' . $request->source . '%');
        }

        $irrigations = $irrigations->get();  // Get filtered data

        return view('irrigation', compact('irrigations'));
    }

    // Store new irrigation data
    public function store(Request $request)
    {
        $request->validate([
            'locality' => 'required|string',
            'source' => 'required|string',
            'area' => 'required|numeric',
            'system' => 'required|string',
        ]);

        Irrigation::create([
            'locality' => $request->locality,
            'source' => $request->source,
            'area' => $request->area,
            'system' => $request->system,
        ]);

        return redirect()->route('irrigation.index')->with('success', 'Data added successfully!');
    }

    // Method for exporting data to CSV
    public function exportToCSV()
    {
        $irrigations = Irrigation::all();

        // Filename with timestamp for uniqueness
        $csvFileName = 'irrigations_' . now()->format('Y_m_d_H_i_s') . '.csv';

        // Set headers for the CSV response
        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename={$csvFileName}",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        // Open PHP output stream
        $handle = fopen('php://output', 'w');

        // Add CSV headers (column names)
        fputcsv($handle, ['Locality', 'Source', 'Area (hectares)', 'Irrigation System']);

        // Add data rows from database
        foreach ($irrigations as $irrigation) {
            fputcsv($handle, [
                $irrigation->locality,
                $irrigation->source,
                $irrigation->area,
                $irrigation->system
            ]);
        }

        // Stream the CSV file to the browser
        return response()->stream(function () use ($handle) {
            fclose($handle);
        }, 200, $headers);
    }
}
