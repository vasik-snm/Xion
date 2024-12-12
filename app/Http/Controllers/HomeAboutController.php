<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use Illuminate\Http\Request;


class HomeAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutdata = AboutUsModel::all();
        return response(view('admin/home_about_us', ['about' => $aboutdata]));
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
    public function show(AboutUsModel $aboutUsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about_data = AboutUsModel::find($id);

        return view('admin/edit_about',['about_data' => $about_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // Find the about data by its ID
            $update_data = AboutUsModel::find($id);

            // Update other fields
            // $update_data->title = $request->title;
            $update_data->description = $request->description;

            // Update images if new ones are provided
            if ($image1 = $request->file('image1')) {
                $image1_name = time() . '.' . $request->image1->extension();
                $request->image1->move(public_path('images'), $image1_name);
                $update_data->image1 = $image1_name;
            }

            if ($image2 = $request->file('image2')) {
                $image2_name = time() . '.' . $request->image2->extension();
                $request->image2->move(public_path('images'), $image2_name);
                $update_data->image2 = $image2_name;
            }

            if ($image3 = $request->file('image3')) {
                $image3_name = time() . '.' . $request->image3->extension();
                $request->image3->move(public_path('images'), $image3_name);
                $update_data->image3 = $image3_name;
            }

            // Save the updated data
            $update_data->save();

            // Redirect with success message
            return redirect('/home_about_us')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the data.');
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUsModel $aboutUsModel)
    {
        //
    }
}
