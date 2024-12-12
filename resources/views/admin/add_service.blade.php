@extends('admin.layouts.main')

@section('main-container')

<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="post" action="{{ url('/store_service') }}">
                    @csrf
                    <div class="card-body p-4">
                        <h5 class="card-title">Add Service</h5>
                        <hr/>
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="inputTitle" class="form-label">Service Title</label>
                                            <input type="text" id="inputTitle" class="form-control" name="title" value="{{ old('title') }}">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputDescription" class="form-label">Service Description</label>
                                            <textarea class="form-control" id="inputDescription" name="description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-12 text-center mt-3">
                                        <div class="col-lg-3" style="margin:0 auto;">
                                            <div class="d-grid">
                                                <button type="submit" value="submit" class="btn btn-primary">Add</button>
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
</div>

@endsection
