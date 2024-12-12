<?php

namespace App\Http\Controllers;

use App\Models\HomeBannerModel;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerdata = HomeBannerModel::all();
        return response(view('admin/home_banner', ['banner' => $bannerdata]));
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
    public function show(HomeBannerModel $homeBannerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $banner_data = HomeBannerModel::find($id);

        return view('admin/edit_home_banner',['banner_data' => $banner_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $update_banner = HomeBannerModel::find($id);

    if (!$update_banner) {
        return redirect()->back()->with('error', 'Banner not found.');
    }

    if ($image = $request->file('image')) {
        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_name);
        $update_banner->image = $image_name;
    }

    $update_banner->title = $request->title;

    if ($update_banner->save()) {
        return redirect('/home_banner')->with('success', 'Banner data updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update banner data.');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeBannerModel $homeBannerModel)
    {
        //
    }
}
