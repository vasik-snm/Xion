<?php

namespace App\Http\Controllers;

use App\Models\FooterModel;
use Illuminate\Http\Request;

class HomeFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer_data = FooterModel::all();
        return view('admin.home_footer', ['footer_data' => $footer_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterModel $footerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $footer_data = FooterModel::find($id);
        return view('admin.edit_footer', ['footer_data' => $footer_data, 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Find the footer data by its ID
            $footer_data = FooterModel::findOrFail($id);

            // Update fields if they exist in the request
            if ($request->has('address')) {
                $footer_data->address = $request->address;
            }

            if ($request->has('number')) {
                $footer_data->number = $request->number;
            }

            if ($request->has('email')) {
                $footer_data->email = $request->email;
            }

            if ($request->has('linkedin')) {
                $footer_data->linkedin = $request->linkedin;
            }

            // Save the data
            $footer_data->save();

            // Redirect with success message
            return redirect('/home_footer')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., database errors) here
            return redirect()->back()->with('error', 'An error occurred while updating the data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterModel $footerModel)
    {
        //
    }
}
