<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_data = ServiceModel::all();
        return view('admin.home_service', ['service_data' => $service_data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service_data = ServiceModel::find($id);
        return view('admin.edit_service', ['service_data' => $service_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $service_data = ServiceModel::findOrFail($id);

            // Update fields
            $service_data->title = $request->input('title');
            $service_data->description = $request->input('description');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
                $service_data->image = 'images/' . $image_name;
            }

            // Save the data
            $service_data->save();

            return redirect('/home_service')->with('success', 'Service updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the service');
        }
    }

    public function create()
    {
        return view('admin.add_service');
    }

    public function store(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                // Add more validation rules if needed
            ]);

            // Create new service
            ServiceModel::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                // Handle image upload if needed
            ]);

            return redirect('/home_service')->with('success', 'Service added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the service');
        }
    }

    public function destroy($id)
    {
        try {
            $service = ServiceModel::findOrFail($id);
            $service->delete();

            return redirect('/home_service')->with('success', 'Service deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the service');
        }
    }
}
