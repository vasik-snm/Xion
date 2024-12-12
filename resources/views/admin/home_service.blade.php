@extends('admin.layouts.main')

@section('main-container')

<style>
    .col {
        text-align: end;
    }

    hr {
        margin-bottom: 5px;
    }
</style>

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
            <div class="breadcrumb-title pe-3">Service</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Service</h6>

        <div class="row mb-3">
            <div class="col">
                <a href="/add_service" class="btn btn-success">Add Service</a>
            </div>
        </div>

        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.NO</th>
                                <th>Service Title</th>
                                <th>Service Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($service_data as $service)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ strlen($service->description) > 50 ? substr($service->description, 0, 50) . '...' : $service->description }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/edit_service/{{ $service->id }}">Edit</a>
                                    <form method="POST" action="/delete_service/{{ $service->id }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
