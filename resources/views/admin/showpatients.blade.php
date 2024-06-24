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
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
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
        @include('admin.navbar')
        <!-- partial -->    

        <div class="container-fluid ">
            <div align="center" style="padding-top:75px;">
                <div class="container" align="center" style="padding:100px">
{{-- <div>
    <a href="{{url('add_doctor_view')}}" class="btn btn-success float-end mb-3">Add Doctor</a>
</div> --}}
                    @if (@session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                            <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr class="pad">
                                <th scope="col">Doctor name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Insurance</th>
                                <th scope="col">Emergency</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                {{-- <th scope="col">Update</th> --}}
                                <th scope="col">Delete</th>
                                {{-- <th scope="col">Send Mail</th> --}}

                                {{-- <th>status</th>
                        <th>Approved</th>
                        <th>cancel</th> --}}

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
                                {{-- <td><img src="doctorimage/{{ $doctor->image }}" alt="doc"class="image"></td> --}}
                                {{-- <td><a class="btn btn-info" href="{{ url('updatedoctor', $doctor->id) }}">Update</a>
                                </td> --}}
                                <td><a class="btn btn-danger"
                                        onclick="return confirm('Are you  sure want to delete..?')"
                                        href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>
                                {{-- <td><a class="btn btn-success" href="{{ url('sendmail', $doctor->id) }}">Send Mail</a>
                                </td> --}}




                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>
