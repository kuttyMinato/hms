<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostz Admin</title>
    <!-- plugins:css -->
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
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
        {{-- @include('admin.body') --}}
        <div class="container-fluid page-body-wrapper">




            <div class="container pt-5" align="center">

                @if (@session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                    </div>
                @endif
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2">
                        <label>Doctor Name:</label>
                        <input type="text" name="name" style="color:black;" placeholder="Write the name">
                    </div>
                    <div class="p-2">
                        <label>phone:</label>
                        <input type="number" name="phone" style="color:black;" placeholder="enter your mobile">
                    </div>
                    <div class="p-2">
                        <label>Speciality:</label>
                        {{-- <input type="text" name="name" style="color:black;" placeholder="Write the name"> --}}
                        <select name="speciality" id="" style="color:black; width:190px;">
                            <option>--Select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label>Rooom No:</label>
                        <input type="number" name="room" style="color:black;" placeholder="enter your Room no">
                    </div>
                    <div class="p-2">
                        <label for="">Doctor Image:</label>
                        <input type="file" name="file">
                    </div>
                    <div class="p-2">

                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
