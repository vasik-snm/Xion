@extends('admin.layouts.main')

@section('main-container')

<div class="page-wrapper">
    <div class="page-content">
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
            <div class="breadcrumb-title pe-3">About Us</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">About Us</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.NO</th>
                                {{-- <th>Title</th> --}}
                                <th>Description</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                {{-- <th>Image 4</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($about as $user)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                {{-- <td>{{ $user->title }}</td> --}}
                                <td>{{ $user->description }}</td>
                                <td><img src="{{ url('images/' . $user->image1) }}" alt=" Image" style="max-width: 100px; max-height: 50px;"></td>
                                <td><img src="{{ url('images/' . $user->image2) }}" alt=" Image" style="max-width: 100px; max-height: 50px;"></td>
                                <td><img src="{{ url('images/' . $user->image3) }}" alt=" Image" style="max-width: 100px; max-height: 50px;"></td>
                                {{-- <td><img src="{{ url('images/' . $user->image4) }}" alt=" Image" style="max-width: 100px; max-height: 50px;"></td> --}}
                                <td>
                                    <a class="btn btn-primary" href="/edit_about/{{ $user->id }}">Edit</a>
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
