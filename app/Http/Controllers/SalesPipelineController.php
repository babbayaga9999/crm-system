<?php
namespace App\Http\Controllers;

use App\Models\SalesPipeline;
use Illuminate\Http\Request;

class SalesPipelineController extends Controller
{
    public function index()
    {
        $pipelines = SalesPipeline::all();
        return view('sales_pipeline.index', compact('pipelines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lead_id' => 'required|exists:leads,id',
            'stage' => 'required|string',
            'value' => 'required|numeric',
        ]);

        SalesPipeline::create($request->all());

        return redirect()->route('sales_pipeline.index')->with('success', 'Sales pipeline updated');
    }
}
