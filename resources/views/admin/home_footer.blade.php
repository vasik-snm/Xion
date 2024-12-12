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
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Footer</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Footer</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Footer</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.NO</th>
                                <th>Footer Address</th>
                                <th>Footer Number</th>
                                <th>Footer Email</th>
                                <th>Footer LinkedIn</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($footer_data as $footer)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ strlen($footer->address) > 50 ? substr($footer->address, 0, 50) . '...' : $footer->address }}</td>
                                <td>{{ $footer->number }}</td>
                                <td>{{ $footer->email }}</td>
                                <td>{{ $footer->linkedin}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/edit_footer/{{ $footer->id }}">Edit</a>
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
