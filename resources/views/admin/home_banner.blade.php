@extends('admin.layouts.main')

@section('main-container')

<div class="page-wrapper">
    <div class="page-content">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div id="popup" class="alert alert-danger">
            {{ session('error') }}
        </div>
        <script>
            // Function to hide the popup after 3 seconds
            setTimeout(function(){
                document.getElementById('popup').style.display = 'none';
            }, 3000); // 3000 milliseconds = 3 seconds
        </script>
    @endif
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Banner</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Banner</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Banner</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.NO</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                       @endphp
                       @foreach($banner as $user)
                       <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $user->title }}</td>
                        <td><img src="{{ url('images/' . $user->image) }}" alt=" Image" style="max-width: 100px; max-height: 50px;"></td>
                        <td>
                            <a class="btn btn-primary" href="/edit_banner/{{ $user->id }}">Edit</a>
                            {{-- <a class="btn btn-danger" href="/delete_category/{{ $user->id }}">Delete</a> --}}
                        </td>
                      </tr>
                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
