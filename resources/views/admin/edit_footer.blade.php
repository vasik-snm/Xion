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

            <form method="post" action="/update_footer/{{$footer_data->id}}">
                @csrf
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Footer</h5>
                    <hr/>
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Footer Address</label>
                                        <textarea id="inputProductDescription" class="form-control" name="address">{{$footer_data->address}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Footer Contact Number</label>
                                        <input type="tel" id="inputProductDescription" class="form-control" name="number" value="{{$footer_data->number}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Footer Email</label>
                                        <input type="text" id="" class="form-control" name="email" value="{{$footer_data->email}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Footer LinkedIn</label>
                                        <input type="text" id="" class="form-control" name="linkedin" value="{{$footer_data->linkedin}}">
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
