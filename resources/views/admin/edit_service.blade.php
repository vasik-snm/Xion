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

            <form method="post" action="/update_service/{{$service_data->id}}">
                @csrf
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Service</h5>
                    <hr/>
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Service Title</label>
                                        <input type="text" id="inputProductDescription" class="form-control" name="title" value="{{ $service_data->{'title'} }}">
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Servicer Image</label>
                                        <input type="file" id="" class="form-control" name="image"  accept=".jpg, .jpeg, .png, .gif, .bmp" value="{{$service_data->image}}">
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Service Description</label>
                                        <textarea class="form-control summernote" name="description">{!! $service_data->description !!}</textarea>
                                    </div>

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
