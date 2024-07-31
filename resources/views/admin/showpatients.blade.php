<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostz Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    {{-- <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                        </div>
                    </div> --}}
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include ('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar');   

        <div class="container">
            <div align="center" style="padding-top:75px;">
                <div class="container" align="center" style="padding:100px">
                    @if (@session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                            <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                        </div>
                    @endif 

                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr class="pad">
                                <th scope="col">Patient name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Insurance</th>
                                <th scope="col">Emergency</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        @foreach ($data as $doctor)
                            <tr align="center" class="table-light">
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->contactinfo }}</td>
                                <td>{{ $doctor->insuranceinfo }}</td>
                                <td>{{ $doctor->emergencydetails }}</td>
                                <td>{{ $doctor->DOB }}</td>
                                <td>{{ $doctor->gender }}</td>
                                <td><a class="btn btn-danger"
                                onclick="return confirm('Are you  sure want to delete..?')"
                                href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            @include('admin.script')
</html>
