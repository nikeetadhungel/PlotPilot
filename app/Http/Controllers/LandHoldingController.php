<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandHolding;
use Symfony\Component\HttpFoundation\StreamedResponse;

class LandHoldingController extends Controller
{
    public function index(Request $request)
    {
        // Start query
        $query = LandHolding::query();

        // Apply filters if present
        if ($request->filled('landType')) {
            $query->where('landType', $request->input('landType'));
        }

        if ($request->filled('irrigation')) {
            $query->where('irrigation', 'like', '%' . $request->input('irrigation') . '%');
        }

        $landHoldings = $query->get();

        return view('landhold', compact('landHoldings'));
    }

    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'locality' => 'required|string|max:255',
            'landType' => 'required|string',
            'irrigation' => 'required|string|max:255',
            'wellDepth' => 'required|numeric',
        ]);

        // Create new record in the database
        LandHolding::create($validatedData);

        return redirect('landhold')->with('success', 'Land Holding Added Successfully');
    }

    public function export()
    {
        $response = new StreamedResponse(function () {
            $handle = fopen('php://output', 'w');

            // CSV header
            fputcsv($handle, ['ID', 'Locality', 'Land Type', 'Irrigation', 'Well Depth', 'Created At']);

            // Get data
            $landHoldings = LandHolding::all();

            foreach ($landHoldings as $land) {
                fputcsv($handle, [
                    $land->id,
                    $land->locality,
                    $land->landType,
                    $land->irrigation,
                    $land->wellDepth,
                    $land->created_at
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="land_holdings.csv"');

        return $response;
    }
}
