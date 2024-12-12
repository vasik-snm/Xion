<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_data = BlogModel::all();
        return view('admin.home_blog', ['blog_data' => $blog_data]);
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
    public function show(BlogModel $blogModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog_data = BlogModel::find($id);
        return view('admin.edit_blog', ['blog_data' => $blog_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // Find the blog data by its ID
            $blog_data = BlogModel::findOrFail($id);

            // Update fields
            $blog_data->title = $request->title;
            $blog_data->description = $request->description;

            // Save the data
            $blog_data->save();

            return redirect('/home_blog')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the data');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogModel $blogModel)
    {
        //
    }
}
