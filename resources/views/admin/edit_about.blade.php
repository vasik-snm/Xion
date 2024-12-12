@extends('admin.layouts.main')

@section('main-container')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <form method="post" enctype="multipart/form-data" action="/update_about/{{$about_data->id}}">
                @csrf
                <div class="card-body p-4">
                    <h5 class="card-title">Edit About Us</h5>
                    <hr/>
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    {{-- <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Title</label>
                                        <input  type="text" id="" class="form-control" name="title" value="{{$about_data->title}}">
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Description</label>
                                        <textarea class="form-control summernote" name="description">{!! $about_data->description !!}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Image 1</label>
                                        <input  type="file"  id="" class="form-control" name="image1"  accept=".jpg, .jpeg, .png, .gif, .bmp" value="{{$about_data->image1}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Image 2</label>
                                        <input  type="file"  id="" class="form-control" name="image2"  accept=".jpg, .jpeg, .png, .gif, .bmp" value="{{$about_data->image2}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Image 3</label>
                                        <input  type="file"  id="" class="form-control" name="image3"  accept=".jpg, .jpeg, .png, .gif, .bmp" value="{{$about_data->image3}}">
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">About-us Image</label>
                                        <input  type="file"  id="" class="form-control" name="image4" value="{{$about_data->image4}}">
                                    </div> --}}
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <div class="col-lg-3" style="margin:0 auto;">
                                        <div class="d-grid">
                                            <button type="submit" value="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
